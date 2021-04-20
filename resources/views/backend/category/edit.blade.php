@extends('backend.layouts.main')

@section('content')

    <section class="content-header">
        <h1>
            Quản Lý Danh Mục
{{--            <a href="{{route('admin.category.index')}}" class="btn bg-purple"> Danh Sách </a>--}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.product.index')}}"><i class="fa fa-home"></i> Trang Chủ</a></li>
            <li><a href="{{route('admin.category.index')}}">Quản Lý Danh Mục</a></li>
            <li class="active">Chỉnh Sửa Danh Mục</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chỉnh Sửa Danh Mục</h3>
                    </div>
                    <form role="form" action="{{route('admin.category.update', ['id' => $data->id ]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="categoryOption">Danh mục cha</label>
                                    <select class="form-control" name="parent_id" >
                                        <option value="0"> -- Chọn -- </option>
                                        @foreach($category as $item)
                                            <option {{ $data ->parent_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Loại Danh Mục</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value="1" {{ ($data->type == 1) ? 'selected' : '' }}>Sản phẩm</option>
                                        <option value="2" {{ ($data->type == 1) ? 'selected' : '' }}>Bài viết</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        {{$errors->first('type')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input value="{{$data->name}}" type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                    @if ($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputPassword1">Vị Trí Hiển Thị</label>
                                    <input value="{{$data->position}}" type="number" class="form-control" id="position" name="position" placeholder="Position" min="1" value="1">
                                    @if ($errors->has('position'))
                                        {{$errors->first('position')}}
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input {{ ($data -> is_active) ? 'checked' : '' }} value="1" type="checkbox" name="is_active" id="is_active"> Hiển Thị
                                    </label>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                    <button type="reset" class="btn btn-light">Hủy</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>


            </div>


        </div>
        <!-- /.row -->
    </section>
@endsection

