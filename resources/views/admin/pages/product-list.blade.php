@extends('admin.master')


@section('content')
    <h1>Product List</h1>

    <a href="{{url('admin/product/create')}}" class="btn btn-success">Create new product</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">details</th>
            <th scope="col">category</th>
            
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $key=>$product)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->details}}</td>
                    <td>{{$product->category->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
