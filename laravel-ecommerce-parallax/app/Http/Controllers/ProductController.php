<?php


namespace App\Http\Controllers;



use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;




class ProductController extends Controller
{
    public function index(){
        $products=Product::with('category')->get();
        return view('welcome',compact('products'));
    }

    public function create(){
        $categories= Category::all();
        return view('create',compact('categories'));
    }

    public function store(Request $request){
       $input = $request->all();
       Product::create($input);
       return redirect('/');

    }
    public function edit($product){
        $categories= Category::all();

        $product=Product::find($product);
        return view('edit-product',compact('product','categories'));
    }
    public function update(Request $request,$product){
        $input = $request->all();
        $product=Product::find($product);
        $product->name=$input['name'];
        $product->price=$input['price'];
        $product->category_id=$input['category_id'];

        $product->save();
        return redirect('/');

    }
    public function delete($product){
        Product::find($product)->delete();
        return redirect()->back();
    }

}
