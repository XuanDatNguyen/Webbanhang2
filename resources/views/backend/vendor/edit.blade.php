@extends('backend.layouts.main')

@section('content')
    <section class="content-header" >
        <h1>
            Chỉnh Sửa Nhà Cung Cấp
            <a style="margin-left: 81rem;" href="{{route('admin.vendor.index')}}" class="btn bg-orange"><i class="fa fa-list"></i> Danh sách nhà cung cấp</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <form role="form" action="{{route('admin.vendor.update',['id' => $data -> id])}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                                    <input value="{{$data->name}}" type="text" class="form-control" name="name" id="name" placeholder="Nhập tên nhà cung cấp">
                                    @if ($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input value="{{$data->email}}" type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hotline</label>
                                    <input value="{{$data->phone}}" type="text" class="form-control" id="phone" name="phone" placeholder="Nhập hotline">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website</label>
                                    <input value="{{$data->website}}" type="text" class="form-control" id="website" name="website" placeholder="Nhập website">
                                </div>
                                <div class="form-group ">
                                    <label >Vị trí</label>
                                    <input value="{{$data->position}}" type="number" class="form-control" id="position" name="position" placeholder="Chọn vị trí" min="1" >
                                    @if ($errors->has('position'))
                                        {{$errors->first('position')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input {{($data->is_active == 1) ? 'checked' : '' }} type="checkbox" value="1" id="is_active" name="is_active"> Hiển thị
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Thay đổi ảnh </label>
                                    <input type="file" id="image" name="image">
                                    <img src="{{ asset($data->image) }}" width="250" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn bg-orange">Cập nhật</button>
                            <button type="reset" class="btn btn-light">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

