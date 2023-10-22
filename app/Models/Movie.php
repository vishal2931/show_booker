<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'release_date',
        'duration',
        'screens',
        'image',
    ];

    protected $casts = [
        'screens' => 'array',
    ];
}
