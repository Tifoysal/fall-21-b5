<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $count['product']=Product::all()->count();
        $count['order']=Order::all()->count();
        $count['customer']=User::all()->count();

        return view('admin.pages.home',compact('count'));
    }
}
