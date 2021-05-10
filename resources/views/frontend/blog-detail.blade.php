@extends('frontend.layouts.main')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('frontend.layouts.sidebar')
                </div>
                <div class="col-sm-9">
                        <div class="blog-post-area">
                            <h2 class="title text-center">Bài viết mới nhất</h2>
                            <div class="single-blog-post">
                                <h3>{{$detailArticles->title}}</h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Mac Doe</li>
                                        <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                        <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                                    </ul>
                                    <span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
                                </div>
                                <a href="">
                                    <img src="{{asset($detailArticles->image)}}" alt="">
                                </a>
                                <p>{{$detailArticles->description}}</p>
                            </div>
                        </div>

                        <div class="rating-area">
                            <ul class="ratings">
                                <li class="rate-this">Rate this item:</li>
                                <li>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="color">(6 votes)</li>
                            </ul>
                            <ul class="tag">
                                <li>TAG:</li>
                                <li><a class="color" href="">Pink <span>/</span></a></li>
                                <li><a class="color" href="">T-Shirt <span>/</span></a></li>
                                <li><a class="color" href="">Girls</a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
