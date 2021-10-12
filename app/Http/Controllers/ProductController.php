<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('category')->paginate(5);
        return view('productList', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('productCreate', compact('categories'));
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $image = $request->file('image');
        if ($image == null) {
            $product->image = $request->defaulImage;
        } else {
            $image = time() . '-' . $product->name . '.' . $request->file('image')->extension();
            $product->image = $image;
            $request->image->move(public_path('images'), $image);
        }
        $product->save();
        return redirect()->route('product.index');
    }


    public function show(Request $request)
    {
        $products = Product::with('category')
            ->where('name','LIKE',"%$request->value%")
            ->paginate(5);
        return view('productSearch',compact('products'));
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id)->first();
        $categories = Category::all();
        return view('productEdit', compact('product', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $image = $request->file('image');
        if ($image == null) {
            $product->image = $request->oldimage;
        } else {
            $image = time() . '-' . $product->name . '.' . $request->file('image')->extension();
            $product->image = $image;
            $request->image->move(public_path('images'), $image);
        }
        $product->save();
        return redirect()->route('product.index');
    }


    public function destroy($id)
    {
        Product::destroy($id);
    }
}
