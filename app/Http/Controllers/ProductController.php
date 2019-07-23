<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Image;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3'],
            'price' => ['required', 'numeric', 'between:0.01,999999.99'],
            'discount' => ['required', 'numeric', 'between:0.01,999999.99'],
            'category_id' => ['required', 'integer'],
            'image.*' => ['sometimes','required','max:20000','mimes:jpg,png,jpeg'],
            'stock' => ['required', 'integer']
        ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->route('product.create')->withErrors($validator);
        }

        $product = new Product;

        $product->title = $request->title;
        $product->slug = str_slug($request->title, '-');
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->category_id = $request->category_id;
        $product->stock = $request->stock;
        $product->save();

    foreach($request->file('image') as $file) {

        if ($file) {
            $image_name = basename($file->getClientOriginalName());
            $file->move(public_path('/img'), $image_name);
        }

        $image = new Image;
        $image->path = $image_name;
        $image->product_id = $product->id;
        $image->save();
    }


}

    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
