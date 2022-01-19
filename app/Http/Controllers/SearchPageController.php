<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class SearchPageController extends Controller
{
    public function index(){
        //$products = Product::inRandomOrder()->take(8)->get();
        $products = Product::all();

        return view('pages.search')->with('products', $products);
    }

    /**
     * @param string $slug
     * @return \illuminate\Http\Response
     */
    public function show($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.product')->with('product', $product);
    }
}
