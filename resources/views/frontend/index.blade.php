@extends('frontend.layouts.main')

@section('slider')
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            @foreach($banners as $key => $banner)
                                <div class="item {{$key == 0 ? 'active' : ''}}">
                                    <div class="col-sm-6">
                                        <img src="{{asset($banner->image)}}" style="width:920px;" alt="" />
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('frontend.layouts.sidebar')
            </div>
            <div class="col-sm-9 padding-right ">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Sản Phẩm Nổi Bật</h2>
                    @foreach($newProducts as $product)
                        <a href="{{route('home.productDetails', ['slug' => $product->slug])}}">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset($product->image)}}" alt="" />
                                            <h2>{{number_format($product->price,0,",",".")}} VNĐ</h2>
                                            <p>{{$product->name}}</p>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div><!--features_items-->
            </div>
        </div>
    </div>
@endsection
