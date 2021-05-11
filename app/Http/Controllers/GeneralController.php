<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Setting;


class GeneralController extends Controller
{
    protected $categories;

    public function __construct()
    {
        // lấy dữ danh mục
        $categories = Category::where([
            'is_active' => 1
        ])->orderBy('position', 'ASC')->get();


        // Cấu hình
        $setting = Setting::first();

        // chia sẻ dữ liệu qua nhiều view khác nhau
        view()->share([
            'categories' => $categories,
            'setting' => $setting,
        ]);
    }

}
