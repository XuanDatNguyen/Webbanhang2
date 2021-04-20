<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('backend.login');
    }

    public function postLogin(Request $request)
    {

        //validate dữ liệu
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]); // validate false => tạo ra biến $errors để lưu toàn thông tin bị lỗi cho từng trường

        // validate thành công

        $dataLogin = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $checkLogin = Auth::attempt($dataLogin, $request->has('remember'));

        // kiểm tra xem có đăng nhập thành công với email và password đã nhập hay không
        if ($checkLogin) {
            return redirect()->route('admin.product.index');
        }

        return redirect()->back()->with('msg', 'Sai email hoặc mật khẩu');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
