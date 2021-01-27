<?php

namespace App\Http\Controllers;

// use App\config\app;
use App\Product;
use App\Productbg;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $lang = app()->getLocale();

        if($lang == 'en') {
            $products = Product::get();
        } else if($lang == 'bg') {
            $products = Productbg::get();
        }

        return view('orderPages.products')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $lang = app()->getLocale();

        if ($lang == 'en') {
            $product = Product::where('slug', $slug)->firstOrFail();
        } else if ($lang == 'bg') {
            $product = Productbg::where('slug', $slug)->firstOrFail();
        }
        
        return view('orderPages.product')->with('product', $product); 
    }
}
