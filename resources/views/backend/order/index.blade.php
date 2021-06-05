@extends('backend.layouts.main')
@section('content')
    <style>tr td:first-child {max-width: 250px} .price {color: red}</style>
    <section class="content-header">
        <h1>
            Danh Sách Đơn Hàng
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box  box-warning">
                    <div class="box-header">
                        <div class="box-tools">
                            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                       placeholder="Search">

                                <div class="input-group-btn bg-orange">
                                    <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered ">
                            <tbody>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Ngày</th>
                                <th class="text-center">Mã đơn hàng</th>
                                <th style="max-with:200px">Trạng thái</th>
                                <th>Họ tên</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Tổng tiền</th>
                                <th class="text-center"></th>
                            </tr>
                            </tbody>
                            <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                            @foreach($data as $key => $item)
                                <tr class="item-{{ $item->id }}"> <!-- Thêm Class Cho Dòng -->
                                    <td class="text-center">{{ $key }}</td>
                                    <td class="text-center">{{ $item->created_at }}</td>
                                    <td class="text-center">{{ $item->code }}</td>
                                    <td>
                                        @if ($item->order_status_id === 1)
                                            <span class="label label-info">Mới</span>
                                        @elseif ($item->order_status_id === 2)
                                            <span class="label label-warning">Đang xử lý</span>
                                        @elseif ($item->order_status_id === 3)
                                            <span class="label label-success">Hoàn thành</span>
                                        @else
                                            <span class="label label-danger">Hủy</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $item->fullname }}
                                    </td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td class="price">{{ number_format($item->total) }} đ</td>
                                    <td>
                                        <a href="{{route('admin.order.edit', ['id'=> $item->id ])}}">
                                            <span title="Edit" type="button" class="btn btn-flat btn-warning">Chi tiết</span>
                                        </a>&nbsp;
                                    </td>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
                {{ $data->links() }}
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection
