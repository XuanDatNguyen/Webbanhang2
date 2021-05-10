@extends('backend.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" >
        <h1>
            Chỉnh Sửa Thương Hiệu
            <a style="margin-left: 83rem;" href="{{route('admin.brand.index')}}" class="btn bg-orange"><i class="fa fa-list"></i> Danh sách thương hiệu</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-warning">
                    <!-- form start -->
                    <form role="form" action="{{route('admin.brand.update',['id' => $data -> id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên thương hiệu</label>
                                    <input value="{{$data->name}}" type="text" class="form-control" id="name" name="name"
                                            placeholder="Nhập tên thương hiệu">
                                    @if ($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Website</label>
                                    <input value="{{$data->website}}" type="text" class="form-control" id="website" name="website"
                                           placeholder="Nhập website">
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
                                        <input {{ ($data->is_active == 1) ? 'checked' : '' }} type="checkbox" value="1" id="is_active" name="is_active"> Hiển thị
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Thay đổi ảnh  </label>
                                    <input type="file" id="image" name="image">
                                    <img src="{{ asset($data->image) }}" width="250" alt="">
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn bg-orange ">Lưu</button>
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


