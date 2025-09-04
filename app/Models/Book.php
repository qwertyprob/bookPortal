<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cover_image',
        'pages',
        'published_year',
    ];

    // связь "многие ко многим" с авторами
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
