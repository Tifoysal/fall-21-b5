<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(Request $request)
    {

//        $from = $request->query('from_date');
//        $to = $request->query('to_date');
//        if($from && $to){
//            $order = Order::whereBetween('created_at',[$from,$to])->get();
//            return view('admin.pages.order-list');
//        }


        $orders = Order::with('user')->get();
        return view('admin.pages.order-list',compact('orders'));
    }

    public function orderCancel($id)
    {
        //find the data
        $order=Order::find($id);
       $order->update([
           'status'=>'cancel'
       ]);

       return redirect()->back();
    }


    public function getCart()
    {

       $carts= session()->get('cart');

        return view('website.pages.cart',compact('carts'));
    }

    public function checkout()
    {
        // insert order data into order table- user_id, total
        $carts= session()->get('cart');
//dd($carts);
        if($carts)
        {
            $order=Order::create([
                'user_id'=>auth()->user()->id,
                'total_price'=>array_sum(array_column($carts,'product_price')),
            ]);

            // insert details into order details table
            foreach ($carts as $cart)
            {
                OrderDetail::create([
                    'order_id'=> $order->id,
                    'product_id'=>$cart['product_id'],
                    'unit_price'=>$cart['product_price'],
                    'quantity'=>$cart['product_qty'],
                    'sub_total'=>$cart['product_qty'] * $cart['product_price'] ,
                ]);
            }
            session()->forget('cart');
            return redirect()->back()->with('message','Order Placed Successfully.');
        }
        return redirect()->back()->with('message','No Data found in cart.');


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

        $cartExist[$id]['product_qty']=$cartExist[$id]['product_qty']+1;
//        dd($cartExist);


        session()->put('cart', $cartExist);

        return redirect()->back()->with('message', 'Product Added to Cart.');

    }
}
