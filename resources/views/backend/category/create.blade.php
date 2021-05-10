@extends('backend.layouts.main')

@section('content')
    <section class="content-header" >
        <h1>
            Thêm Mới Danh Mục
            <a style="margin-left: 88rem;" href="{{route('admin.category.index')}}" class="btn bg-orange"><i class="fa fa-list"></i> Danh sách danh mục</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Danh mục cha</label>
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option value="0">--Chọn danh mục cha--</option>
                                        @foreach($data as $item)
                                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Loại danh mục</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value="">--Chọn loại danh mục--</option>
                                        <option value="1">Sản phẩm</option>
                                        <option value="2">Bài viết</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        {{$errors->first('type')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục">
                                    @if ($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>

                                <div class="form-group ">
                                    <label >Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position" placeholder="Position" min="1" value="1">
                                    @if ($errors->has('position'))
                                        {{$errors->first('position')}}
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input value="1" type="checkbox" name="is_active" id="is_active"> Hiển thị
                                    </label>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn bg-orange">Lưu</button>
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

