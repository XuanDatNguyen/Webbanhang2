@extends('backend.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Quản Lý Bài Viết
            {{--            <a href="{{route('admin.article.create')}}" class="btn bg-purple"><i class="fa fa-plus"></i> Thêm tin tức</a>--}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Trang Chủ</a></li>
            <li><a href="#">Quản Lý Bài Viết</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Tin Tức</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Hình ảnh</th>
                                <th width="20%">Tiêu đề bài viết</th>
                                <th width="20%">Mô tả</th>
                                <th>Danh mục</th>
                                <th>Vị trí</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr class="item-{{ $item->id }}">
                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ asset($item->image) }}" width="50"/></td>
                                    <td>{{ $item -> title }}</td>
                                    <td>{!! $item->summary !!}</td>
                                    <td>{{@$item->category->name}}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>{{ $item->is_active == 1 ? 'Hiển thị' : 'Ẩn' }}</td>
                                    <td>
                                        <a href="{{ route('admin.article.edit', ['id' => $item->id ]) }}"
                                           class="btn btn-flat bg-purple">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button data-id="{{ $item->id }}" class="btn btn-danger btn-delete"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection
@section('my_js')
    <script type="text/javascript">
        $(document).ready(function () {
            // Thiết lập csrf => chổng giả mạo
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            $('.btn-delete').on('click', function () {

                let id = $(this).data('id');

                let result = confirm("Bạn có chắc chắn muốn xóa ?");

                if (result) { // neu nhấn == ok , sẽ send request ajax

                    $.ajax({
                        url: '/admin/article/' + id, // http://webthucpham.local:8888/user/8
                        type: 'DELETE', // phương truyền tải dữ liệu
                        data: {
                            // dữ liệu truyền sang nếu có
                            name: 'dung'
                        },
                        dataType: "json", // kiểu dữ liệu muốn nhận về
                        success: function (res) {
                            //  PHP : $user->name
                            //  JS: res.name

                            if (res.success != 'undefined' && res.success == 1) { // xóa thành công
                                $('.item-' + id).remove();
                            }
                        },
                        error: function (e) { // lỗi nếu có
                            console.log(e);
                        }
                    });
                }

            });

            /*$( ".btn-delete" ).click(function() {
                alert( "Handler for .click() called." );
            });*/

        });
    </script>
@endsection
