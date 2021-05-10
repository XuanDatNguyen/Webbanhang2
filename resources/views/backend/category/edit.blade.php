@extends('backend.layouts.main')

@section('content')
    <section class="content-header" >
        <h1>
            Chỉnh Sửa Danh Mục
            <a style="margin-left:88rem;" href="{{route('admin.category.index')}}" class="btn bg-orange"><i class="fa fa-list"></i> Danh sách danh mục</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
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
                                    <label for="">Loại danh mục</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value="1" {{ ($data->type == 1) ? 'selected' : '' }}>Sản phẩm</option>
                                        <option value="2" {{ ($data->type == 1) ? 'selected' : '' }}>Bài viết</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        {{$errors->first('type')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input value="{{$data->name}}" type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                    @if ($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputPassword1">Vị trí </label>
                                    <input value="{{$data->position}}" type="number" class="bg form-control" id="position" name="position" placeholder="Position" min="1" value="1">
                                    @if ($errors->has('position'))
                                        {{$errors->first('position')}}
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input {{ ($data -> is_active) ? 'checked' : '' }} value="1" type="checkbox" name="is_active" id="is_active"> Hiển thị
                                    </label>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn bg-orange">Cập Nhật</button>
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

