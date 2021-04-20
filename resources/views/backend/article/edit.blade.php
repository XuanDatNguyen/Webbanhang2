@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Quản Lý Bài Viết
            {{--            <a href="{{route('admin.article.index')}}" class="btn bg-purple pull-right"><i class="fa fa-list"></i> Danh Sách</a>--}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.product.index')}}"><i class="fa fa-home"></i> Trang Chủ</a></li>
            <li><a href="{{route('admin.article.index')}}">Quản Lý Bài Viết</a></li>
            <li><a class="active">Chỉnh Sửa Bài Viết</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chỉnh Sửa Bài Viết</h3>
                    </div>


                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.article.update', ['id' => $data -> id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputSupplier">Tiêu Đề</label>
                                        <input value="{{$data->title}}" type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề">
                                        @if ($errors->has('title'))
                                            <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('title') }}</label>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Danh Mục Tin Tức</label>
                                        <select class="form-control" name="category_id">
                                            <option value="0"> -- Chọn Danh Mục --</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputSupplier">Liên Kết URL</label>
                                        <input value="{{$data->url}}" type="text" class="form-control" id="title" name="url" placeholder="Điều hướng tới ...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị Trí</label>
                                        <input type="number" class="form-control" id="position" name="position" value="{{ $data->position }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Tóm Tắt</label>
                                <textarea  id="summary" name="summary" class="form-control" rows="2"
                                           placeholder="Enter ...">{{$data->summary}}</textarea>
                                @if ($errors->has('summary'))
                                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('summary') }}</label>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Mô tả chi tiết</label>
                                <textarea id="description" name="description" class="form-control" rows="2" placeholder="Enter ...">{{$data->description}}</textarea>
                                @if ($errors->has('description'))
                                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('description') }}</label>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Thay Đổi Ảnh Bài Viết</label>
                                        <input type="file" id="image" name="image">
                                        <img src="{{ asset($data->image) }}" alt="" width="100" style="margin-top: 10px;">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>
                                            <input {{ ($data -> is_active) ? 'checked' : '' }} type="checkbox" value="1" name="is_active"> Hiển Thị
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                <button type="reset" class="btn btn-light">Hủy</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('my_js')
    <script type="text/javascript">
        $(function () {
            var _ckeditor = CKEDITOR.replace('summary');
            _ckeditor.config.height = 100; // thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('description');
            _ckeditor.config.height = 200; // thiết lập chiều cao
        })
    </script>
@endsection
