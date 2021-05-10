@extends('backend.layouts.main')

@section('content')
    <section class="content-header" >
            <h1>
                Thêm Mới Thương Hiệu
                <a style="margin-left: 83rem;" href="{{route('admin.brand.index')}}" class="btn bg-orange"><i class="fa fa-list"></i> Danh sách thương hiệu</a>
            </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <form role="form" action="{{route('admin.brand.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên thương hiệu</label>
                                    <input  type="text" class="form-control" id="name" name="name"
                                            placeholder="Nhập tên thương hiệu">
                                    @if ($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Website</label>
                                    <input type="text" class="form-control" id="website" name="website"
                                           placeholder="Nhập website">
                                </div>
                                <div class="form-group ">
                                    <label >Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position" placeholder="Chọn vị trí" min="1" >
                                    @if ($errors->has('position'))
                                        {{$errors->first('position')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" value="1" id="is_active" name="is_active"> Hiển thị
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Thêm ảnh </label>
                                    <input type="file" id="image" name="image">
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


