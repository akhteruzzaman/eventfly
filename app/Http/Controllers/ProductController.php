<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function getProducts(Request $request){
        $shop = $request->user();
        $products = $shop->api()->rest('GET','/admin/api/2023-10/products.json');
       
        return view('pages.products', ['products' => $products['body']['products']]);
        //dd($products);
    }
}
