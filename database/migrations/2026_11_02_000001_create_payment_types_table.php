<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Additive only: creates a lookup table for payment types.
     * payments.payment_type stays a plain string, so no existing row is changed.
     */
    public function up(): void
    {
        if (!Schema::hasTable('payment_types')) {
            Schema::create('payment_types', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->timestamps();
            });
        }

        $defaults = ['Monthly Fee', 'Medical Expenses', 'Activity Fee', 'Special Care', 'Equipment', 'Other'];

        // Keep every type already used in live payments so old records stay selectable
        $existing = DB::table('payments')
            ->whereNotNull('payment_type')
            ->where('payment_type', '!=', '')
            ->distinct()
            ->pluck('payment_type')
            ->all();

        $now = now();

        collect($defaults)
            ->merge($existing)
            ->map(fn ($name) => trim($name))
            ->filter()
            ->unique(fn ($name) => mb_strtolower($name))
            ->each(fn ($name) => DB::table('payment_types')->insertOrIgnore([
                'name'       => $name,
                'created_at' => $now,
                'updated_at' => $now,
            ]));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_types');
    }
};
