@extends('backend.layouts.main')

@section('content')
    <section class="content-header" >
        <h1>
            Thêm Mới Sản Phẩm
            <a style="margin-left: 88rem;" href="{{route('admin.product.index')}}" class="btn bg-orange"><i class="fa fa-list"></i> Danh sách sản phẩm</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="row">
                        <div class="col-md-6">
                            @if ($errors->any())
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                                    </button>
                                    <h4><i class="icon fa fa-warning"></i> Cảnh báo !</h4>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <form role="form" action="{{route('admin.product.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputSupplier">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Nhập tên sản phẩm">
                                        @if ($errors->has('name'))
                                            <label class="text-red"
                                                   style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i
                                                    class="fa fa-info"></i> {{ $errors->first('name') }}</label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="stock">Số lượng trong kho</label>
                                        <input type="text" class="form-control" id="stock" name="stock"
                                               placeholder="Nhập số lượng trong kho">
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryOption">Danh mục sản phẩm</label>
                                        <select class="form-control" name="category_id">
                                            <option value="select"> -- chọn danh mục --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputSupplier">Liên kết URL</label>
                                        <input type="text" class="form-control" id="name" name="url"
                                               placeholder="Nhập liên kết url">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Giá gốc (vnđ)</label>
                                        <input type="text" class="form-control" id="price" name="price"
                                               placeholder="Nhập giá gốc">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Giá khuyến mãi (vnđ)</label>
                                        <input type="text" class="form-control" id="sale" name="sale"
                                               placeholder="Nhập giá khuyến mãi">
                                    </div>
                                    <div class="form-group ">
                                        <label for="exampleInputPassword1">Vị trí</label>
                                        <input type="number" class="form-control" id="position" name="position"
                                               placeholder="Position" min="1" value="1">
                                        @if ($errors->has('position'))
                                            {{$errors->first('position')}}
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" value="1" name="is_active"> Hiển thị
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" value="1" name="is_hot"> Sản phẩm nổi bật
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="margin-left: 0;">
                                    <div class="form-group">
                                        <label>Tóm tắt</label>
                                        <textarea id="summary" name="summary" class="form-control" rows="3"
                                                  placeholder="Enter ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea id="description" name="description" class="form-control" rows="3"
                                                  placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Thêm ảnh</label>
                                    <input type="file" id="image" name="image">
                                    @if ($errors->has('image'))
                                        <label class="text-red"
                                               style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i
                                                class="fa fa-info"></i> {{ $errors->first('image') }}</label>
                                    @endif
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-warning">Lưu</button>
                                    <button type="reset" class="btn btn-light">Hủy</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

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
            var ckeditor1 = CKEDITOR.replace('summary');
            ckeditor1.config.height = 100;
            var ckeditor2 = CKEDITOR.replace('description');
            ckeditor2.config.height = 200;
        })
        $(function () {
            var _ckeditor = CKEDITOR.replace('editor1', {
                filebrowserBrowseUrl: '{{ asset('/backend/plugins/ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('/backend/plugins/ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('/backend/plugins/ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('/backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('/backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('/backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
            });
            _ckeditor.config.height = 200;
        })

        $(function () {
            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 200;
        })

    </script>
@endsection
