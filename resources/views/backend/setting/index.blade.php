@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thông Tin Cấu Hình Website
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <form role="form" action="{{ route('admin.setting.update', ['id' => $setting->id ]) }}"
                          method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên công ty</label>
                                        <input value="{{ $setting->company }}" type="text" class="form-control"
                                               id="company"
                                               name="company" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mã số thuế</label>
                                        <input value="{{ $setting->tax }}" type="text" class="form-control" id="tax"
                                               name="tax" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Di động</label>
                                        <input value="{{ $setting->phone }}" type="text" class="form-control" id="phone"
                                               name="phone" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hotline</label>
                                        <input value="{{ $setting->hotline }}" type="text" class="form-control"
                                               id="hotline"
                                               name="hotline" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Facebook</label>
                                        <input value="{{ $setting->facebook }}" type="text" class="form-control"
                                               id="facebook"
                                               name="facebook" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input value="{{ $setting->email }}" type="text" class="form-control" id="email"
                                               name="email" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Địa chỉ 1</label>
                                        <input value="{{ $setting->address }}" type="text" class="form-control"
                                               id="address"
                                               name="address" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Địa chỉ 2</label>
                                        <input value="{{ $setting->address2 }}" type="text" class="form-control"
                                               id="address2"
                                               name="address2" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website</label>
                                        <input value="{{ $setting->website }}" type="text" class="form-control"
                                               id="email"
                                               name="website" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Giới thiệu về công ty</label>
                                        <textarea id="introduce" name="introduce" class="form-control"
                                                  rows="2">{{ $setting->introduce }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Thay đổi logo</label>
                            <input type="file" id="new_image" name="new_image"><br>
                            @if ($setting->image)
                                <img src="{{ asset($setting->image) }}" width="200">
                            @endif
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn bg-orange">Lưu</button>
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
            var _ckeditor = CKEDITOR.replace('introduce');
            _ckeditor.config.height = 100; // thiết lập chiều cao
        })
    </script>
@endsection
