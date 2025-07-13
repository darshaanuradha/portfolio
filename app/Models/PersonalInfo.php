<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'address',
        'phone',
        'email',
        'date_of_birth',
        'nic',
        'summary'
    ];

    protected $casts = [
        'date_of_birth' => 'date'
    ];
}
