@extends('admin.master')


@section('content')

<h1>Create an Employee</h1>


<form action="{{route('admin.employee.add')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Employee Name</label>
        <input name="name" placeholder="Enter Employee Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Employee email</label>
        <input name="email" placeholder="Enter employee email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Employee address</label>
        <input name="address" placeholder="Enter employee address"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    

    <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
