<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaymentType extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Options keyed by name (payments store the name as a string).
     * Also merges any value already saved on a payment so older records always display.
     */
    public static function options(): array
    {
        $names = static::orderBy('name')->pluck('name');

        $used = Payment::query()
            ->whereNotNull('payment_type')
            ->distinct()
            ->pluck('payment_type');

        return $names->merge($used)
            ->filter()
            ->unique()
            ->sort(SORT_NATURAL | SORT_FLAG_CASE)
            ->mapWithKeys(fn ($name) => [$name => $name])
            ->all();
    }

    public static function findOrCreateByName(string $name): string
    {
        $name = trim($name);

        $existing = static::whereRaw('LOWER(name) = ?', [mb_strtolower($name)])->first();

        return ($existing ?? static::create(['name' => $name]))->name;
    }

    public function paymentsCount(): int
    {
        return Payment::where('payment_type', $this->name)->count();
    }

    /**
     * Rename the type and carry the new name onto payments already using it.
     * Only the payment_type label changes; amounts, dates etc. are untouched.
     */
    public function rename(string $newName): void
    {
        $newName = trim($newName);
        $oldName = $this->name;

        if ($newName === '' || $newName === $oldName) {
            return;
        }

        DB::transaction(function () use ($oldName, $newName) {
            Payment::where('payment_type', $oldName)->update(['payment_type' => $newName]);

            $this->update(['name' => $newName]);
        });
    }
}
