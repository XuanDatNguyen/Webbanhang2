@extends('frontend.layouts.main')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('frontend.layouts.sidebar')
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">{{$category->name}}</h2>
                        @foreach($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{ route('home.productDetails', ['slug' => $product->slug , 'id' => $product->id]) }}" title="{{ $product->name }}" >
                                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                            </a>
                                            <h2>{{ number_format($product->price,0,",",".") }}VNĐ</h2>
                                            <a href="{{ route('home.productDetails', ['slug' => $product->slug , 'id' => $product->id]) }}" title="{{ $product->name }}"><p>{{ $product->name }}</p></a>
                                            <a href="{{route('home.cart')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <ul class="pagination">

                        </ul>
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>
@endsection
