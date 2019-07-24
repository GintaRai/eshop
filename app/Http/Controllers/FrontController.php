<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function singleProduct($slug)
    {

        $product = Product::where('slug', $slug)->first();


        return view('front.single-product', ['product' => $product]);
    }
}
