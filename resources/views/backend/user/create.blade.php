@extends('backend.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm người dùng <a href="{{route('user.index')}}" class="btn bg-purple"> Danh Sách </a>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Thông tin người dùng</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm Thông Tin Nhà Cung Cấp</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Chọn Quyền</label>
                                    <select class="form-control" name="role_id" id="role_id">
                                        <option value="0">--Chọn--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Member</option>
                                        <option value="4">Other</option>
                                    </select>
                                    @if ($errors->has('role_id'))
                                        {{$errors->first('role_id')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Họ Tên</label>
                                    <input  type="text" class="form-control" id="name" name="name"
                                           placeholder="Nhập họ tên">
                                    @if ($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Nhập email">
                                    @if ($errors->has('email'))
                                        {{$errors->first('email')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input  type="password" class="form-control" id="password" name="password"
                                           placeholder="Nhập password">
                                    @if ($errors->has('password'))
                                        {{$errors->first('password')}}
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh Đại Diện</label>
                                    <input type="file" id="avatar" name="avatar">

                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" id="is_active" name="is_active"> Kích hoạt tài khoản
                                    </label>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Tạo</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection


