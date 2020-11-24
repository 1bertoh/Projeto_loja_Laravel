<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){

        return view("index");
    }

    public function buy() {

        return view('buy/buy');
    }

     public function carrinho() {

        return view('carrinho/carrinho');
    }

     public function search() {

        return view('search/search');
    }

    public function signup() {

        return view('signup/signup');
    }

    public function add_product() {

        $products =   Product::all();

        return view('add_product/add_product', ['products'=>$products]);
    }

    public function store_product(Request $request) {
        $product = new Product();

        $product->name = $request->name;
        $product->id_category = $request->id_category;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->especification = $request->especification;
        $product->image = $request->image;
        $product->save();

        

        return redirect('/');
    }
}
