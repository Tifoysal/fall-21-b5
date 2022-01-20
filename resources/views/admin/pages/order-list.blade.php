@extends('admin.master')


@section('content')
<h1>Order List</h1>
<div>
    <form action="{{route('admin.product.list')}}">
        <div class="input-group rounded mt-3 mb-2">
            <input type="date" class="form-control rounded" name="from_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <input type="date" class="form-control rounded" name="to_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
    <button type="submit">submit</button>
  </span>
        </div>
    </form>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">User Name</th>
        <th scope="col">Total Price</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $key=>$order)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$order->user->name}}</td>
        <td>{{$order->total_price}} .BDT</td>
        <td>

                {{$order->status}}

        </td>
        <td>
            @if($order->status!='cancel')
            <a href="{{route('admin.order.cancel',$order->id)}}" class="btn btn-danger">Cancel</a>
            @endif
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
