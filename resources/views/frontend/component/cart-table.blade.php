@if(count($cart) > 0)
    <div class="table-responsive cart_info">
        <table class="table table-condensed">
            <thead>
            <tr class="cart_menu">
                <td class="image">Sản phẩm</td>
                <td class="description"></td>
                <td class="price">Giá</td>
                <td class="quantity">Số lượng</td>
                <td class="total">Tổng cộng</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($cart as $item)
                <tr>
                    <td class="cart_product">
                        <a href=""><img width="100px" height="100px" src="{{asset($item -> options -> image)}}" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">{{$item -> name}}</a></h4>
                    </td>
                    <td class="cart_price">
                        <p>{{ number_format($item->price ,0,",",".") }} vnđ
                        </p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <input href="javascript:void(0)" class="cart_quantity_input item-qty" type="text" name="qty" value="{{$item -> qty}}" autocomplete="off" size="2">
                        </div>
                        <a data-id="{{$item -> rowId}}" class="update-qty" href="javascript:void(0)" style="color: #FE980F; margin-left: 1rem;">Cập nhật</a>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">{{ number_format($item->qty * $item->price ,0,",",".") }} vnđ
                        </p>
                    </td>
                    <td class="cart_delete">
                        <a data-id="{{$item -> rowId}}" class="cart_quantity_delete remove-to-cart" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                    </td>
                </tr>

            @endforeach
            <!-- Dòng tổng -->
            <tr class="text-center">
                <td>
                    <a href="{{route('home.cart.destroy')}}" class="btn btn-danger"><i class="fa fa-times"></i> Hủy đơn hàng </a>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{route('home.cart.order')}}">Thanh toán <i class="fa fa-arrow-right"></i> </a>
                </td>
                <td></td>
                <td><b>Thành tiền :</b></td>
                <td style="font-size: 3rem">{{ $totalPrice }} vnđ</td>
            </tr><!-- END TR-->
            </tbody>
        </table>
    </div>
@section('my_javascript')
    <script type="text/javascript">
        $(function () {
            // xóa sản phẩm khỏi giỏ hàng
            $(document).on("click", '.remove-to-cart', function () {
                var result = confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng ?");

                if (result == true) {
                    var rowId = $(this).attr('data-id'); // 9a34a635a736b8ed53f234e3b7ad738e
                    $.ajax({
                        url: '/gio-hang/xoa-san-pham-gio-hang/' + rowId,
                        type: 'get',
                        data: {
                            id: rowId
                        }, // dữ liệu truyền sang nếu có
                        dataType: "HTML", // kiểu dữ liệu trả về
                        success: function (response) {
                            $('#my-cart').html(response);
                        }
                    });
                }
            });

            // cập nhật số lượng của từng sản phẩm trong giỏ hàng
            $(document).on("click", '.update-qty', function (e) {
                var rowId = $(this).attr('data-id'); // a9d4048ab5a0c0e0505f43a6834097f2

                var input = $(this) // <nút cập nhât >
                    .parent('.cart_quantity') // cha <td class="quantity"
                    .find('.item-qty'); // <input name="qty"

                var so_luong = input.val(); // so lương


                // Kiểm tra Nếu không phải là số nguyên Hoặc số lượng < 1
                if (isNaN(so_luong) || so_luong < 1) {
                    alert("Số lượng là số nguyên lớn hơn >= 1");
                    return false;
                }

                $.ajax({
                    url: '/gio-hang/cap-nhat-so-luong-san-pham',
                    type: 'get',
                    data: {
                        rowId: rowId,
                        qty: so_luong
                    }, // dữ liệu truyền sang nếu có
                    dataType: "HTML", // kiểu dữ liệu trả về
                    success: function (response) {
                        if (response != false) {
                            $('#my-cart').html(response);
                        }
                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                });
            });
        })
    </script>
@endsection
@else
    <div class="container text-center">
        <div class="content-404">
            <h1>Bạn chưa có sản phẩm nào trong giỏ hàng</h1>
            <h2><a href="/" style=" text-transform: uppercase">Quay về trang chủ</a></h2>
        </div>
    </div>

@endif

