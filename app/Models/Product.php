<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //  untuk menentukan data apa saja yang dapat diisi dan lebih aman
    protected $fillable = ['name', 'price', 'desc'];

    // memasukkan semua data tapi tidak aman 
    // protected $guarded = [];


}
