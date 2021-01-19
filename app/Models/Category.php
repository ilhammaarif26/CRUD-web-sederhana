<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];
    //contoh relasi on e to many ke table Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
