<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::with('category')->get();
        // dd($products);
        return view('admin.pages.product-list',compact('products'));
    }


    public function productCreateForm()
    {
        $categories = Category::all(); 
        
        return view('admin.pages.create-product',compact('categories'));
    }

    public function productStore(Request $request){
        //  dd($request->all());

        Product::create([
            // field name from db || field name from form 

            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->category,
            'details'=>$request->details
        ]);

        return redirect()->back();

    }
}
