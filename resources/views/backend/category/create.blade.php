@extends('backend.layouts.main')

@section('content')

    <section class="content-header">
        <h1>
            Quản lý danh mục
            <a href="{{route('category.index')}}" class="btn bg-purple"> Danh Sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Thông tin danh mục</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm thông tin danh mục</h3>
                    </div>
                    <form role="form" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Danh mục cha</label>
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option value="">--Chọn--</option>
                                        @foreach($data as $item)
                                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Loại danh mục</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value="">--chọn--</option>
                                        <option value="1">Sản phẩm</option>
                                        <option value="2">Bài viết</option>
                                        <option value="3">Dịch vụ</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        {{$errors->first('type')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input required type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                    @if ($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <input type="file" id="image" name="image">

                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputPassword1">Vị trí hiển thị</label>
                                    <input type="number" class="form-control" id="position" name="position" placeholder="Position" min="1" value="1">
                                    @if ($errors->has('position'))
                                        {{$errors->first('position')}}
                                    @endif
                                </div>


                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_active" id="is_active"> Hiển thị
                                    </label>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>


            </div>


        </div>
        <!-- /.row -->
    </section>
@endsection

