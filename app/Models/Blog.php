<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'date',
        'description',
        'image_path',
        'is_public',
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'date'      => 'date',
    ];
}