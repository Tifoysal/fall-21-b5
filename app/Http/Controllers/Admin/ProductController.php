<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
