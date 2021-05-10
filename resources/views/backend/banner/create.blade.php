@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm Mới Banner
            <a style="margin-left: 91rem;" href="{{ route('admin.banner.index') }}" class="btn bg-orange btn-flat"><i
                    class="fa fa-list" style="margin-right: 10px"></i> Danh sách banner</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <form role="form" action="{{route('admin.banner.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="Nhập tên tiêu đề">
                                        @if ($errors->has('title'))
                                            <label> {{ $errors->first('title') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Loại</label>
                                        <select class="form-control" name="type">
                                            <option value="1">Slide</option>
                                            <option value="2">Background</option>
                                            <option value="3">Banner right</option>
                                            <option value="4">Banner left</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Target</label>
                                        <select class="form-control" name="target">
                                            <option value="_blank">_blank</option>
                                            <option value="_self">_self</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí</label>
                                        <input type="number" class="form-control" id="position" name="position"
                                               value="">
                                        @if ($errors->has('position'))
                                            <label> {{ $errors->first('position') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Liên kết URL</label>
                                        <input type="text" class="form-control" id="url" name="url" placeholder="Url">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea id="description" name="description" class="form-control" rows="2"
                                                  placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Thêm ảnh</label>
                                        <input type="file" id="image" name="image">
                                        @if ($errors->has('image'))
                                            <label> {{ $errors->first('image') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" value="1" name="is_active">Hiển thị
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-warning">Lưu</button>
                            <button type="reset" class="btn btn-light">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('my_js')
    <script type="text/javascript">
        $(function () {
            var _ckeditor = CKEDITOR.replace('description');
            _ckeditor.config.height = 100; // thiết lập chiều cao
        })
    </script>
@endsection


