<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'positions', 
        'phone', 
        'description', 
        'no', 
        'height',
        'dob',
        'preferred_foot',
        'image'
    ];

    protected $casts = [
        'positions' => 'array',
    ];
}
