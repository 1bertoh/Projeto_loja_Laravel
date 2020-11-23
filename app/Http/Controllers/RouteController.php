<?php

namespace App\Http\Controllers;

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

        return view('add_product/add_product');
    }
}
