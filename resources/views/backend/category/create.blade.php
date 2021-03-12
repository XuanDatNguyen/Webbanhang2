@extends('backend.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản Lý Danh Mục Sản Phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ </a></li>
            <li class="active">Quản lý danh mục sản phẩm</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm Thông Tin Danh Mục Sản Phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh Mục Cha</label>
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Loại Danh Mục</label>
                                    <select class="form-control" name="type" id="type">
                                        <option>Sản Phẩm</option>
                                        <option>Bài Viết</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input required type="text" class="form-control" name="name" id="name"
                                           placeholder="Nhập tên danh mục">
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh</label>
                                    <input type="file" id="image" name="image">

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

