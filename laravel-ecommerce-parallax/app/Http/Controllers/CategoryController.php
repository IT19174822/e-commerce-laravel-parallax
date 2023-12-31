<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('index',compact('categories'));
    }

    public function create(){
        return view('createCategory');
    }

    public function store(Request $request){
       $input = $request->all();
       Category::create($input);
       return redirect('/category');

    }
}
