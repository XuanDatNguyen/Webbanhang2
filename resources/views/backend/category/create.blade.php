@extends('backend.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm Danh Mục <a href="{{route('category.index')}}" class="btn bg-purple"> Danh Sách</a>
        </h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ </a></li>
            <li class="active">Quản lý danh mục sản phẩm</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm Thông Tin Danh Mục Sản Phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                @csrf
                                <label>Danh Mục Cha</label>
                                <select class="form-control" name="parent_id" id="parent_id">
                                    <option value="0">--Chọn Danh Mục Cha--</option>
                                    @foreach($data as $item)
                                        <option value="{{$item -> id}}">{{$item -> name}}</option>
                                    @endforeach
                                </select>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label>Loại Danh Mục</label>--}}
{{--                                <select class="form-control" name="type" id="type">--}}
{{--                                    <option>Sản Phẩm</option>--}}
{{--                                    <option>Bài Viết</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Danh Mục</label>
                                <input required type="text" class="form-control" name="name" id="name"
                                       placeholder="Nhập tên danh mục">
                                @if($errors->has('name'))
                                    <label class="text-red"> <i> class="fa fa-info"></i>{{$errors->first('name')}}</label>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Vị trí hiển thị</label>
                                <input type="number" class="form-control" min="1" value="1" id="number"
                                       placeholder="">
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="is_active" name="is_active"> Hiển thị
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input type="file" id="image" name="image">
                            </div>

                        </div>


                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </section>
@endsection

