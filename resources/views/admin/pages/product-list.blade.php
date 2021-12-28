@extends('admin.master')


@section('content')
    <h1>Product List</h1>
    @if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
    <a href="{{url('admin/product/create')}}" class="btn btn-success">Create new product</a>

    <form action="{{route('admin.product.list')}}" method="get">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input type="text" class="form-control" name="search" placeholder="Search here...">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
    </form>

    @if($key)
    <h3>You are searching for: {{$key}}. Found {{$products->count()}} results</h3>
    @endif
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
                    <td>
                        <a class="" href="{{route('admin.product.details',$product->id)}}"> {{$product->name}}</a>
                    </td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->details}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.product.details',$product->id)}}">View</a>
                        <a class="btn btn-info" href="{{route('admin.product.edit',$product->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('admin.product.delete',$product->id)}}">Delete</a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
