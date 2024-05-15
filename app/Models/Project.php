<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'image',
        'github_link',
        'visibility',
    ];

    protected $casts = [
        'tech_stack' => 'array',
    ];
}
