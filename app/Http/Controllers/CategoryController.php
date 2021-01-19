<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('category.index', compact('category'));
    }

    //filter by category
    public function show(Category $category)
    {
        $products = $category->products;

        return view('product.index', compact('products', 'category'));
    }

    public function showCreate()
    {
        return view('category.create');
    }

    public function create()
    {
        $attr = request()->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        Category::create($attr);

        session()->flash('categoryCreate', 'Category was created');

        return redirect('category/index');
    }

    public function showUpdate(Category $category)
    {
        return view('category.update', compact('category'));
    }

    public function update(Category $category)
    {
        $attr = request()->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $category->update($attr);

        session()->flash('categoryUpdate', 'Category was updated');

        return redirect('category/index');
    }

    public function delete(Category $category)
    {
        $category->delete();

        session()->flash('categoryDelete', 'Category was deleted');

        return redirect('category/index');
    }
}
