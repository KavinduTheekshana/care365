<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    protected $fillable = [
        'reg_number',
        'image',
        'date',
        'gender',
        'name',
        'age',
        'dob',
        'co_morbidities_risk_factors',
        'complaints',
        'height_cm',
        'weight_kg',
        'bmi',
        'waist_circumference',
        'hip_circumference',
        'officer_in_charge_id',
    ];

    protected $casts = [
        'date' => 'date',
        'dob' => 'date',
        'complaints' => 'array',
        'height_cm' => 'decimal:2',
        'weight_kg' => 'decimal:2',
        'bmi' => 'decimal:2',
        'waist_circumference' => 'decimal:2',
        'hip_circumference' => 'decimal:2',
    ];

    /**
     * Officer in Charge (Carer) relationship
     */
    public function officerInCharge(): BelongsTo
    {
        return $this->belongsTo(User::class, 'officer_in_charge_id');
    }

    /**
     * Multiple Guardians relationship
     */
    public function guardians(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'client_guardian')
            ->withTimestamps();
    }
}
