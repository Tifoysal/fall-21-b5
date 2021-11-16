@extends('admin.master')


@section('content')
    <h1>Employee List</h1>

    <a href="{{route('admin.employee.form')}}" class="btn btn-success">Create an employee</a>

    
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th>{{$employee->id}}</th>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->address}}</td>
                </tr>
            @endforeach
        
        
        </tbody>
    </table>
@endsection
