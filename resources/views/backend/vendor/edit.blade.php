@extends('backend.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản Lý Nhà Cung Cấp
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Quản lý nhà cung cấp</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sửa Thông Tin Nhà Cung Cấp</h3>
                    </div>
                    <form role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên NCC</label>
                                    <input required type="text" class="form-control" name="name" id="name" placeholder="Nhập tên NCC">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input required type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Điện thoại</label>
                                    <input required type="text" class="form-control" id="phone" name="phone" placeholder="Nhập SĐT">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh</label>
                                    <input type="file" id="image" name="image">

                                </div>
                                p
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="Nhập website">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <textarea class="form-control" rows="3" placeholder="Nhập địa chỉ"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Vị trí hiển thị</label>
                                    <input type="number" class="form-control" min="1" value="1" id="number" placeholder="">
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="is_active" name="is_active"> Hiển thị
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

