<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Category extends Model
{
    protected $fillable = ['book_id', 'category_id'];

    public function books_category() {
        return $this->belongsTo(related:Book::class);
    }

    public function categories_book() {
        return $this->belongsTo(related:Category::class);
    }
}
