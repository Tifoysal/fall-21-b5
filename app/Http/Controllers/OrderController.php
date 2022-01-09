<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(Request $request)
    {
        $from = $request->query('from_date');
        $to = $request->query('to_date');
        if($from && $to){
            $order = Order::whereBetween('created_at',[$from,$to])->get();
            return view('admin.pages.order-list');
        }
        return view('admin.pages.order-list');
    }

    public function getCart()
    {
       $carts= session()->get('cart');
        return view('website.pages.cart',compact('carts'));
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message','Cart cleared successfully.');

    }

    public function addToCart($id)
    {

        $product=Product::find($id);
        if(!$product)
        {
            return redirect()->back()->with('error','No product found.');
        }

        $cartExist=session()->get('cart');

        if(!$cartExist) {
            //case 01: cart is empty.
            //  action: add product to cart
            $cartData = [
                $id => [
                    'product_id' => $id,
                    'product_name' => $product->name,
                    'product_price' => $product->price,
                    'product_qty' => 1,
                ]
            ];
            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'Product Added to Cart.');
        }

        //case 02: cart is not empty. but product does not exist into the cart
        //action: add different product with quantity 1
//        dd(isset($cartExist[$id]));
        if(!isset($cartExist[$id]))
        {
            $cartExist[$id] = [
                    'product_id' => $id,
                    'product_name' => $product->name,
                    'product_price' => $product->price,
                    'product_qty' => 1,
            ];

            session()->put('cart', $cartExist);

            return redirect()->back()->with('message', 'Product Added to Cart.');
        }


        //case 03: product exist into cart
                //action: increase product quantity (quantity+1)


    }
}
