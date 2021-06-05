@extends('frontend.layouts.main');
@section('content')
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Thông tin đơn đặt hàng</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" action="{{route('home.cart.postOrder')}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control"  placeholder="Họ và tên">
                                @if ($errors->has('name'))
                                    {{$errors->first('name')}}
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control"  placeholder="Địa chỉ email">
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
                                <textarea name="address" id="address"  class="form-control" rows="8" placeholder="Địa chỉ nhận hàng"></textarea>
                                @if ($errors->has('address'))
                                    {{$errors->first('address')}}
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="note" id="note"  class="form-control" rows="8" placeholder="Ghi chú"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Đặt hàng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/#contact-page-->
@endsection
