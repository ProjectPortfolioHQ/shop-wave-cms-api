<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

    protected $casts = [
        'links' => 'array',
    ];

    protected $fillable = [
        'name',
        'avatar',
        'links',
    ];
}
