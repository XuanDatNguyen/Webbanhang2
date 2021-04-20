@extends('frontend.layouts.main')
@section('contact')
    <div id="contact-page" class="container">
        <div class="bg">
{{--            <div class="row">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <h2 class="title text-center">Contact <strong>Us</strong></h2>--}}
{{--                    <div id="gmap" class="contact-map">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Liên Hệ Với My Store</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" action="{{route('home.postContact')}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control"  placeholder="Họ và tên của bạn">
                                @if ($errors->has('name'))
                                    {{$errors->first('name')}}
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control"  placeholder="Địa chỉ email của bạn">
                                @if ($errors->has('email'))
                                    {{$errors->first('email')}}
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="phone" class="form-control"  placeholder="Số diện thoại">
                                @if ($errors->has('phone'))
                                    {{$errors->first('phone')}}
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="content" id="content"  class="form-control" rows="8" placeholder="Nội dung"></textarea>
                                @if ($errors->has('content'))
                                    {{$errors->first('content')}}
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Thông Tin Liên Hệ</h2>
                        <address>
                            <p>My Store Inc.</p>
                            <p>183, Hải Triều 2, Quán Toan, Hồng Bàng, HP</p>
                            <p>Hải Phòng VN</p>
                            <p>Mobile: 0372545906</p>
                            <p>Email: contact@mystore.com</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Kết Nối Với My Store</h2>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/#contact-page-->
@endsection
