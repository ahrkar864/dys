<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $fillable = [
        'score_player',
        'vs_team_name',
        'place',
        'datetime',
        'take_goal',
        'give_goal',
        'image'
    ];

    protected $casts = [
        'score_player' => 'array',
    ];
}
