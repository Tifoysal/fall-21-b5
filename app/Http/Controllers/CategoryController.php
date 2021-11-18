<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList(){
        return view('admin.pages.category-list');
    }

    public function categoryCreate(){
        return view('admin.pages.product-category-create');
    }

    public function add(Request $request){
        // dd($request->all());
        Category::create([
            'name'=>$request->name,
            'details'=>$request->details
        ]);
        return redirect()->back();
    }
}
