<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class FrontController extends Controller
{
    public function singleProduct($slug)
    {

        $product = Product::where('slug', $slug)->first();


        return view('front.single-product', ['product' => $product]);
    }

    public function category($slug)
    {

        $category = Category::where('slug', $slug)->first();


        $products = Product::where('category_id', $category->id)->get();


        return view('front.category', ['products' => $products]);
    }
}
