@extends('admin.master')


@section('content')
    <h1>Product List</h1>

    <a href="{{url('admin/product/create')}}" class="btn btn-success">Create new product</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Details</th>
            <th scope="col">Category</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($products as $key=>$product)
                <tr>
                    <th>{{$key+1}}</th>
                    <th>
                        <img style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/products/'.$product->image)}}" alt="product">

                    </th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->details}}</td>
                    <td>{{$product->category->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
