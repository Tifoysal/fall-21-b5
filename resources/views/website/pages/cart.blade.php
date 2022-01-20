@extends('website.master')

@section('content')


    <h1 style="padding-top: 100px;">My Cart ({{session()->has('cart') ? count(session()->get('cart')):0}})</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Sub Total</th>
        </tr>
        </thead>
        <tbody>

        @if($carts)
        @foreach($carts as $key=>$data)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$data['product_name']}}</td>
            <td>{{$data['product_price']}}</td>
            <td>{{$data['product_qty']}}</td>
            <td>{{$data['product_price'] * $data['product_qty']}}</td>
        </tr>
        @endforeach
            @endif

        </tbody>
    </table>
    <a href="{{route('cart.checkout')}}" class="btn btn-success">Checkout</a>
    <a href="{{route('cart.clear')}}" class="btn btn-danger">Clear Cart</a>

    @endsection
