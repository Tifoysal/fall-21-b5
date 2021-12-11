@extends('admin.master')


@section('content')
    <h1>Product List</h1>
    @if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
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
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($products as $key=>$product)
                <tr>
                    <th>{{$key+1}}</th>
                    <th>
                        <img style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/products/'.$product->image)}}" alt="product">

                    </th>
                    <td>{{$product->name}} "---" {{$product->id}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->details}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.product.details',$product->id)}}">View</a>
                        <a class="btn btn-danger" href="{{route('admin.product.delete',$product->id)}}">Delete</a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
