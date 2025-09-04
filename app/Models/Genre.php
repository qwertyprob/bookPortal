<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // книги, относящиеся к жанру
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
