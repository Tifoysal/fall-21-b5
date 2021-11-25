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

        return view('admin.pages.product-list',compact('products'));
    }


    public function productCreateForm()
    {
        $categories = Category::all();

        return view('admin.pages.create-product',compact('categories'));
    }

    public function productStore(Request $request){



                $image_name=null;
//              step 1: check image exist in this request.
                 if($request->hasFile('product_image'))
                 {
                     // step 2: generate file name
                     $image_name=date('Ymdhis') .'.'. $request->file('product_image')->getClientOriginalExtension();

                     //step 3 : store into project directory

                     $request->file('product_image')->storeAs('/products',$image_name);

                 }

        Product::create([
            // field name from db || field name from form
            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->category,
            'details'=>$request->details,
            'image'=>$image_name,
        ]);

        return redirect()->back()->with('success','Product created successfully.');

    }
}
