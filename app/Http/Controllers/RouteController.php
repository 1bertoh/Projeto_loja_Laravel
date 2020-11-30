<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){

        $products =   Product::all();
        


        return view("index", ['products'=>$products]);
    }

    public function buy($id = null ) {

        $products =   Product::all();
        $product_get =  Product::where('id', $id)->get();

        foreach($product_get as $product);

        return view('buy/buy', ['products'=>$products, 'product' => $product]);
    }

     public function carrinho() {

        

        return view('carrinho/carrinho');
    }

     public function search( Request $request) {

       
        $search = request('search');
        $sort = request('sort');

        $category =   Category::where('category', $search )->get();
        

        if($search) {

            if(count($category) === 0) {
                

                return redirect('search/search_not_found');
            }
             
                 foreach($category as $category_arr);
                $category_id = $category_arr->id;

                $products = Product::where('id_category', $category_id)->get();

                

                return view('search/search', ['produtos' => $products]);

       
        } else {
            $products = Product::all();
        }

        if($sort) {

        }


        return view('search/search', ['produtos' => $products]);
    }

    public function search_not_found() {

        return view('page_not_found/search_not_found', ['msg' => 'Pesquisa não encontrada.']);
        
    }

    public function store_search( Request $request) {

        $search = $request->search;

        //$category = Category::where('name', $search);

        return redirect('/search?search='.$search);

    }

    public function signup() {

        return view('signup/signup');
    }

    public function add_product() {

        

        return view('add_product/add_product');
    }

    public function store_product(Request $request) {
        $product = new Product();

        $product->name = $request->name;
        $product->id_category = $request->id_category;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->especification = $request->especification;

        // tratar imagem-->
        if($request->has('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage -> extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime('now')).'.'.$extension;
            $requestImage->move(public_path('Image/products'), $imageName);
            $product->image = $imageName;
        }
        
        $product->save();

        return redirect('/');
    }

    
}
