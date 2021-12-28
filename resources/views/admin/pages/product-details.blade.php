@extends('admin.master')


@section('content')


    <div id="divToPrint">
        <h1>Product Details</h1>

        <p>
            <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/products/'.$product->image)}}" alt="product">
        </p>
        <p>Product Name: {{$product->name}}</p>
        <p>Product Price: <h4><span style="color: orange">BDT {{$product->price}}</span></h4></p>
        <p>Product Details: {{$product->description}}</p>
        <p>Product Status: {{$product->status}}</p>


    </div>

        <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">

@endsection

<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
