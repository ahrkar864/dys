<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'address', 'caption', 'phone', 'cover_photo', 'logo_photo', 'facebook_link', 'telegram_link', 'youtube_link', 'copyright', 'about_caption', 'matches_caption', 'blogs_caption', 'players_caption', 'description'];
    
}
