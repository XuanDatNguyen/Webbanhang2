<?php

namespace App\Http\Controllers;

use Cart;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends GeneralController
{
    public function index () {
        // lấy toàn bộ sản phẩm đã lưu trong giỏ
        $listProducts = Cart::content();
        // lấy tổng giá của đơn hàng
        $totalPrice = Cart::subtotal(0,",","."); // subtotal dungf hamf nay thây xem cho em phần ajax cập nhật nuwaxx ạ

        return view('frontend.cart.index', [
            'cart' => $listProducts,
            'totalPrice' => $totalPrice
        ]);
    }

    public function addProductToCart ($id, $qty = 1) {

        $product = Product::findOrFail($id);

        // Thông tin sẽ lưu vào giỏ
        $cartInfo = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $qty,
            'price' => $product->price, /// chõ này giá sale hay price price thầy ạ
            'options' => [
                'image' => $product->image,
            ]
        ];



        // Gọi đến thư viện thêm sản phẩm vào giỏ hàng
        Cart::add($cartInfo);

        session(['totalItem' => Cart::count()]);

        // chuyển hướng về trang danh sách sản phẩm trong giỏ hàng
        return redirect() -> route('home.cart');
    }

    public function removeToCart ($rowId) {
        //xóa sản phẩm trong giỏ
        Cart::remove($rowId);

        $listProducts = Cart::content();
        $totalPrice = Cart::total(0,",","."); // lấy tổng giá của sản phẩm

        return view('frontend.component.cart-table', [
            'cart' => $listProducts,
            'totalPrice' => $totalPrice
        ]);

    }

    public function updateToCart(Request $request)
    {
        // check nhập số lượng không đúng định dạng
        $validator = Validator::make($request->all(), [
            'qty' => 'required|numeric|min:1',
        ]);

        // check số lượng lỗi
        if ($validator->fails()) {
            return false;
        }

        $rowId = $request->input('rowId');
        $qty = (int) $request->input('qty');

        // cập nhật lại số lương
        Cart::update($rowId, ['qty' => $qty]);

        $listProducts = Cart::content(); // lấy toàn sản phẩm trong giỏ
        $totalPrice = Cart::subtotal(0,",","."); // lấy tổng giá của sản phẩm

        return view('frontend.component.cart-table', [
            'cart' => $listProducts,
            'totalPrice' => $totalPrice
        ]);
    }

    public function order () {
        $totalCount = Cart::count();

        // Kiểm tra xem có sản phẩm nào trong giỏ hàng
        if ($totalCount <= 0) {
            return back()->with('msg', 'Không có sản phẩm trong giỏ hàng');
        }
        return view('frontend.cart.order');
    }

    public function postOrder (Request $request) {

        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ],[
            'name.required' => 'Bạn cần phải nhập vào họ tên',
            'phone.required' => 'Bạn cần phải nhập vào số điện thoại',
            'email.required' => 'Bạn cần phải nhập vào email',
            'email.email' => 'Email sai định dạng',
            'address.required' => 'Bạn cần phải nhập vào địa chỉ',
        ]);

        // Lưu vào bảng đơn đặt hàng - orders
        $order = new Order();
        $order->fullname = $request->input('name');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->note = $request->input('note');
        $order->total = Cart::total(0,"",""); // lấy tổng giá của tất sản phẩm trong giỏ
        $order->order_status_id = 1; // 1 = mới, 2 = đang xu ly , 3= hoàn thanh , 4 = hủy
        $order->save(); // Lưu vào bảng chỉ tiết đơn đặt hàng

        // Tạo mã đơn hàng để gửi mail nếu cần
        $maDonHang = 'DH-'.$order->id.'-'.date('d').date('m').date('Y'); //ví dụ KQ: : DH-11-20052020
        $order->code = $maDonHang;
        $order->save(); // LƯU mã đơn hàng
        // gửi email kèm thông mã đơn hàng => mục truy vết dễ
        // code email....


        // Xử lý lưu chi tiết trong bảng order_detail
        $cart = Cart::content(); // danh sản phẩm đang lưu trong giỏ

        if (count($cart) >0) {
            foreach ($cart as  $item) {
                $_detail = new OrderDetail();
                $_detail->order_id = $order->id;
                $_detail->name = $item->name;
                $_detail->image = $item->options->image;
                $_detail->product_id = $item->id;
                $_detail->qty = $item->qty;
                $_detail->price = $item->price;
                $_detail->save();

                //xử lý trừ sản phảm trong kho ở đây
                $objProduct = Product::find($item->id);
                $objProduct->stock = $objProduct->stock - $item->qty;
                $objProduct->save();
                //end
            }
        }
        // end

        // Xóa thông tin giỏ hàng Hiện tại sau khi đặt hàng thành công
        Cart::destroy();
        // xoa luong
        session(['totalItem' => 0]);

        return redirect()->route('home.cart.completedOrder');
    }

    public function completedOrder () {
        return view('frontend.cart.completeOrder');
    }

    public function destroy (Request $request) {
        Cart::destroy();

        // xóa số lượng sp đã lưu trước đó
        session(['totalItem' => 0]);
        return redirect('/');
    }




}
