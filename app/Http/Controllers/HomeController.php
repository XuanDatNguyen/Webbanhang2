<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class HomeController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        return view('frontend.index');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function postContact(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'content' => 'required',
        ],[
            'name.required' => 'Bạn cần phải nhập vào họ tên',
            'email.required' => 'Bạn cần phải nhập vào email',
            'email.email' => 'Email không hợp lệ',
            'phone.required' => 'Bạn cần nhập vào số điện thoại',
            'phone.numeric' => 'Số điện thoại không hợp lệ',
            'content.required' => 'Bạn cần phải nhập vào nội dung',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->content = $request->input('content');

        $contact->save();
        return redirect()->route('home.contact');
    }


}
