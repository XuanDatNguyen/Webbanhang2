<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Banner;
use Illuminate\Http\Request;
use App\Contact;
use App\Product;

class HomeController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {

        $banners = Banner::where(['is_active'=>1])
            ->limit(4)
            ->orderBy('position','DESC')
            ->get();
        $products  = Product::where(['is_active'=>1])
            ->limit(12)
            ->orderBy('position','DESC')
            ->get();


        return view('frontend.index', [
            'newProducts' => $products,
            'banners' => $banners,
        ]);
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

    public function getProductsByCategory($slug)
    {
        // step 1 : lấy chi tiết thể loại => lay ra id danh muc can tim kiem
        $cate = Category::where(['slug' => $slug])->first();

        if ($cate) {
            // step 1.1 Check danh mục cha -> lấy toàn bộ danh mục con để where In
            $ids = []; // mảng lưu toàn id của danh mục cha + id - danh mục con

            $ids[] = $cate->id; // 1

//            foreach ($this->categories as $item) {
//                if ($item->parent_id == $cate->id) {
//                    $ids[] = $item->id; // thêm id của danh mục con vào mảng ids
//                }
//            }
            // ids = 1,7,8,9,11

            // step 2 : lấy list sản phẩm theo thể loại
            $products = Product::where(['is_active' => 1])
                ->whereIn('category_id' , $ids)
                ->latest()
                ->paginate(16);

            /*$query = DB::table('products')->select('*')
                ->whereIn('category_id', $ids)
                ->where('is_active', '=', 1);
            $list_products = $query->paginate(16);;*/

            return view('frontend.category',[
                'category' => $cate,
                'products' => $products
            ]);

        } else {
            return $this->notfound();
        }
    }
    public function detailProduct($slug){
        $product = Product::where(['is_active' => 1,'slug' => $slug], ['position', 'ASC'])->first();

        $recommendedProducts  = Product::where([
            ['is_active', '=', 1],
            ['id','<>',$product->id],
            ['category_id','=',$product->category_id]
        ])->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->limit(5)
            ->get();

        return view('frontend.product-detail',[
            'product' => $product,
            'recommendedProducts' => $recommendedProducts
        ]);
    }


    public function card() {
        return view('frontend.card');
    }

    public function search(Request $request) {
        // b1. Lấy từ khóa tìm kiếm
        $keyword = $request->input('tu-khoa');

        $slug = str_slug($keyword);

        //$sql = "SELECT * FROM products WHERE is_active = 1 AND slug like '%$keyword%'";

        $products = Product::where([
            ['slug', 'like', '%' . $slug . '%'],
            ['is_active', '=', 1]
        ])->paginate(6);


        $totalResult = $products->total(); // số lượng kết quả tìm kiếm

        return view('frontend.search', [
            'products' => $products,
            'totalResult' => $totalResult,
            'keyword' => $keyword ? $keyword : ''
        ]);
    }

    public function blog() {
        $articles = Article::where(['is_active'=>1])
            ->limit(3)
            ->orderBy('position','ASC')
            ->get();
        return view('frontend.blog', [
            'articles'=>$articles
        ]);
    }

    public function blogDetails($slug) {
        $detailArticles = Article::where(['is_active' => 1,'slug' => $slug])->first();
        return view('frontend.blog-detail',[
            'detailArticles'=>$detailArticles

        ]);
    }
}
