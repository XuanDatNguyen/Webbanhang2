@extends('backend.layouts.main')

@section('content')
    <section class="content-header" >
        <h1>
            Thêm Mới Người dùng
            <a style="margin-left: 86rem;" href="{{route('admin.user.index')}}" class="btn bg-orange"><i class="fa fa-list"></i> Danh sách người dùng</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <form role="form" action="{{route('admin.user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chọn quyền</label>
                                    <select class="form-control" name="role_id" id="role_id">
                                        <option value="0">--Chọn quyền--</option>
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
                                    <label for="exampleInputPassword1">Họ tên</label>
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
                                    <label>
                                        <input type="checkbox" value="1" id="is_active" name="is_active"> Kích hoạt
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Thêm ảnh</label>
                                    <input type="file" id="avatar" name="avatar">
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn bg-orange">Lưu</button>
                                    <button type="reset" class="btn btn-light">Hủy</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection


