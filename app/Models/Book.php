<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['publisher_id', 'title', 'author', 'year', 'synopsis', 'image'];

    public function publisher() {
        return $this->belongsTo(related:Publisher::class);
    }

    public function book_category() {
        return $this->hasMany(related:Book_Category::class);
    }
}
