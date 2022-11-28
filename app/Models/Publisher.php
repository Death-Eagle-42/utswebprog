<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'email', 'image'];

    public function books() {
        return $this->hasMany(related:Book::class);
    }
}
