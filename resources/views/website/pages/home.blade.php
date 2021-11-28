@extends('website.master')

@section('content')


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="caption">
                        <h2>Ecommerce HTML Template</h2>
                        <div class="line-dec"></div>
                        <p>Pixie HTML Template can be converted into your desired CMS theme. Total <strong>5
                                pages</strong> included. You can use this Bootstrap v4.1.3 layout for any CMS.
                            <br><br>Please tell your friends about <a rel="nofollow"
                                                                      href="https://www.facebook.com/tooplate/">Tooplate</a>
                            free template site. Thank you. Photo credit goes to <a rel="nofollow"
                                                                                   href="https://www.pexels.com">Pexels
                                website</a>.</p>
                        <div class="main-button">
                            <a href="#">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Featured Items</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">

                        @foreach($products as $product)

                            <a href="single-product.html">
                                <div class="featured-item" style="width: 250px;height: 300px;">
                                    <img style="width: 150px; height: 150px" src="{{url('uploads/products/'.$product->image)}}" alt="Item 1">
                                    <h4>{{$product->name}}</h4>
                                    <h6>BDT {{$product->price}}</h6>
                                    <button class="btn btn-primary">Add to cart</button>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featred Ends Here -->

@endsection

