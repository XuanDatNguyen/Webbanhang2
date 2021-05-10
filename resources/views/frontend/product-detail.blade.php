@extends('frontend.layouts.main')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('frontend.layouts.sidebar')
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{asset($product->image)}}" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <h2>{{$product->name}}</h2>
                                <p>Mã Sản Phẩm: SP{{$product->id}}</p>
                                <span>
									<span>VNĐ {{number_format($product->price,0,",",".")}} VNĐ</span>
									<label>Số Lượng:</label>
									<input type="text" value="3" />
{{--									<button type="button" class="btn btn-fefault cart">--}}
{{--										<i class="fa fa-shopping-cart"></i>--}}
{{--										Add to cart--}}
{{--									</button>--}}
                                    <a href="{{route('home.card')}}" class="btn btn-default cart"><i class="fa fa-shopping-cart"></i>Mua Hàng</a>
								</span>
                                <p><b>Tình trạng:</b> {{($product->stock) > 0 ? 'Còn hàng' : 'hết hàng'}}</p>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->

                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended items</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($recommendedProducts as $product)
                                    <div class="item active">
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="{{asset($product->image)}}" alt="" />
                                                        <h2>{{number_format($product->price,0,",",".")}}</h2>
                                                        <p>{{$product->name}}</p>
                                                        <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="{{asset($product->image)}}" alt="" />
                                                        <h2>{{number_format($product->price,0,",",".")}}</h2>
                                                        <p>{{$product->name}}</p>
                                                        <a href="{{route('home.card')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div><!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>
@endsection
