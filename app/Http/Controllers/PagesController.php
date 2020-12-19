<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $products = Product::paginate(9);
        return view('home', compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function allproducts()
    {
        $products = Product::all();
        return view('allproducts', compact('products'));
    }
}
