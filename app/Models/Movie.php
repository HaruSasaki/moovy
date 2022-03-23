<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Movie extends Model
{

    protected $table = "movies";
    protected $primarykey = "id";
    protected $fillable = [
        'title',
        'year',
        'type',
        'genre',
        'duration',
        'writer',
        'director',
        'rated',
        'rating',
        'synopsis',
        'cover',
        'banner',
        'trailer'
    ];

    protected $hidden;
}