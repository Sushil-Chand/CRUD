<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index(){

        $products = Product::all();
        return view('products.index',['products'=> $products]);
    }
    public function create() {
        return view('products.create');
    }

    public function store(Request $request){
    
        $data = $request->validate([
           
            'name'=> 'required',
            'qty'=>'required|numeric',
            'price' => 'required|numeric|between:0,9999999999999.99',
            'description'=>'nullable'

        ]);
        $newProduct = Product::create($data);

        return redirect(route('product.index'))->with('success', 'Product created successfully');
      }

    public function edit(Product $product){
   
       return view('products.edit',['product'=> $product]);
    }

    public function update( Product $product, $request){
        $data = $request->validate([
            'name'=> 'required',
            'qty'=>'required|numeric',
            'price' => 'required|decimal|between:0,9999999999999.99',
            'description'=>'nullable'
        ]);
        $product->update($data);
        return redirect(route('product.index'))->with('success', 'product update successfully');
    }

}


