<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        return view('admin.pages.product-list');
    }


    public function productCreateForm()
    {
        return view('admin.pages.create-product');
    }

    public function productStore(Request $request){
        //  dd($request->all());

        Product::create([
            // field name from db || field name from form 

            'name'=>$request->name,
            'price'=>$request->price,
            'details'=>$request->details
        ]);

        return redirect()->back();

    }
}
