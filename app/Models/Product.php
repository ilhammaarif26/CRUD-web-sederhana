<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //  untuk menentukan data apa saja yang dapat diisi dan lebih aman
    protected $fillable = ['category_id', 'name', 'price', 'desc'];

    // memasukkan semua data tapi tidak aman 
    // protected $guarded = [];

    //proses relasi table one to many ke table categories
    //catatan " hasMany untuk relasi dengan menampilkan id nya saja di browser " atau memilki satu row
    //catatan " jika belongsTo unutk relasi dengan menampilkan semua data yang berelasi di browser"
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
