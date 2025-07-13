<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'technologies',
        'role',
        'period',
        'achievements',
        'image',
        'github_url',
        'live_url',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean'
    ];
}
