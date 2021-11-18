@extends('admin.master')


@section('content')
    <h1>category List</h1>

    <a href="{{route('admin.category.form')}}" class="btn btn-success">Create new category</a>


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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
       
        </tbody>
    </table>
@endsection
