@extends('backend.layouts.main')

@section('content')
    <section class="content-header" >
        <h1>
            Chỉnh Sửa Người Dùng
            <a style="margin-left: 85rem;" href="{{route('admin.user.index')}}" class="btn bg-orange"><i class="fa fa-list"></i> Danh sách người dùng</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <form role="form" action="{{route('admin.user.update', ['id' => $data->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chọn quyền</label>
                                    <select class="form-control" name="role_id">
                                        <option value="" >-- chọn --</option>
                                        <option value="1" {{ ($data->role_id == 1) ? 'selected' : '' }} >Admin</option>
                                        <option value="2" {{ ($data->role_id == 2) ? 'selected' : '' }}>Manager</option>
                                        <option value="3" {{ ($data->role_id == 3) ? 'selected' : '' }}>Member</option>
                                    </select>
                                    @if ($errors->has('role_id'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i>
                                            {{ $errors->first('role_id') }}
                                        </label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Họ tên</label>
                                    <input value="{{ $data->name }}" type="text" class="form-control" id="name" name="name" placeholder="Nhập họ & tên">
                                    @if ($errors->has('name'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i>
                                            {{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input value="{{ $data->email }}" type="text" class="form-control" id="email" name="email" placeholder="Nhập Email">
                                    @if ($errors->has('email'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('email') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="color: red"> Mật khẩu mới</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile"> Thay đổi ảnh</label>
                                    <input type="file" id="avatar" name="avatar">
                                    <img src="{{ asset($data->avatar) }}" alt="" width="250" style="margin-top: 10px;">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input {{ ($data->is_active == 1) ? 'checked' : '' }} type="checkbox" value="1" name="is_active"> Kích Hoạt
                                    </label>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn bg-orange">Cập Nhật</button>
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
