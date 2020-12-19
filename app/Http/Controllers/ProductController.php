<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('allproducts', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //berbagai cara unutk memasukkan data ke dalam database

        // cara 1
        // $product = new Product;
        // $product->name = $request->name;
        // $product->desc = $request->desc;
        // $product->save();

        // return redirect('product/home');

        // cara 2 lebih simpel tapi harus mengguanakan guarded pada modelnya 
        // Product::create([
        //     'name' => $request->name,
        //     'desc' => $request->desc,
        // ]);

        // return back();

        // membuat validasi
        $attr = request()->validate([
            'name' => 'required|min:5|max:50', //|min:5 untuk membuat minimal karakter pada input 
            'price' => 'required',
            'desc' => 'required|min:10|max:500', //|max:50 unutk menentukan maksimal arakter yang dimasukkan
            // 'imageurl' => 'required',
        ]);

        // cara 3 lebih simpel jika ingin semua data dimasukkan 
        Product::create($attr);

        session()->flash('success', 'the post was created');

        return redirect('allproducts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $product)
    // {
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response    
     */
    public function edit(Product $product)
    {
        return view('product.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product)
    {
        $attr = request()->validate([
            'name' => 'required|min:5|max:50', //|min:5 untuk membuat minimal karakter pada input 
            'desc' => 'required|min:10|max:500', //|max:50 unutk menentukan maksimal arakter yang dimasukkan
            // 'imageurl' => 'required',
        ]);

        // cara 3 lebih simpel jika ingin semua data dimasukkan 
        $product->update($attr);

        session()->flash('successUpdate', 'Post was updated');

        return redirect('allproducts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        session()->flash('successDelete', 'Product was deleted');

        return redirect('allproducts');
    }
}
