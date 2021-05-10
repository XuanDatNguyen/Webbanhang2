@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Danh Sách Danh Mục
            <a style="margin-left:89rem;" href="{{ route('admin.category.create') }}" class="btn bg-orange btn-flat"><i class="fa fa-plus" style="margin-right: 10px"></i> Thêm danh mục</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="text-align: center">STT</th>
                                <th style="text-align: center">Tên danh mục </th>
                                <th style="text-align: center">Danh mục cha</th>
                                <th style="text-align: center">Trạng thái</th>
                                <th style="text-align: center">Vị trí</th>
                                <th style="text-align: center">Hành động</th>
                            </tr>

                            @foreach($data as $key => $item)
                                <tr class="item-{{ $item->id }}">
                                    <td style="text-align: center">{{ $key + 1 }}</td>
                                    <td style="text-align: center">{{ $item->name }}</td>
                                    <td style="text-align: center">{{ $item->parent_id }}</td>
                                    <td style="text-align: center">{{ $item->is_active == 1 ? 'Hiển thị' : 'Ẩn' }}</td>
                                    <td style="text-align: center">{{ $item->position }}</td>
                                    <td style="text-align: center">
                                        <a href="{{ route('admin.category.edit', ['id' => $item->id ]) }}" class="btn btn-flat bg-purple"><i class="fa fa-pencil"></i></a>
                                        <button data-id="{{ $item->id }}" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('my_js')
    <script type="text/javascript">
        $(document).ready(function() {
            // Thiết lập csrf => chổng giả mạo
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                }
            })

            $('.btn-delete').on('click',function () {

                let id = $(this).data('id');

                let result = confirm("Bạn có chắc chắn muốn xóa ?");

                if (result) { // neu nhấn == ok , sẽ send request ajax

                    $.ajax({
                        url: '/admin/category/'+id, // http://webthucpham.local:8888/user/8
                        type: 'DELETE', // phương truyền tải dữ liệu
                        data: {
                            // dữ liệu truyền sang nếu có
                            name : 'dung'
                        },
                        dataType: "json", // kiểu dữ liệu muốn nhận về
                        success: function (res) {
                            //  PHP : $user->name
                            //  JS: res.name

                            if (res.success != 'undefined' && res.success == 1) { // xóa thành công
                                $('.item-'+id).remove();
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

