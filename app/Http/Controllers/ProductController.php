<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

//use Illuminate\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product = Product::latest()->paginate(10); // select * from category order by id desc limit 20 offset 0
        // $data = User::all(); // select * from user

        return view('backend.product.index', [
            'data' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $data = Product::all();
        return view('backend.product.create',[
            'data' => $data,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name'); // họ tên

        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'upload/product/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }
        $stock = $request->input('stock'); // số lượng trong kho
        $price = $request->input('price');
        $url = $request->input('url');
        $sale = $request->input('sale');
        $position= $request->input('position');
        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $is_hot = 0;
        if ($request->has('is_hot')) { // kiem tra is_active co ton tai khong?
            $is_hot = $request->input('is_hot');
        }
        $category_id = (int)$request->input('category_id'); //


        $product = new Product(); //khởi tạo

        $product->name = $name;
        $product->slug = Str::slug($request->input('name'));
        $product->stock = $stock;
        $product->price = $price;
        $product->url = $url;
        $product->sale = $sale;
        $product->position = $position;
        $product->is_active = $is_active;
        $product->is_hot = $is_hot;
        $product->category_id = $category_id;
        $product->image = $path_image;
        $product->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.product.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);

        return view('backend.product.edit', [
            'data' => $product,
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name'); // họ tên
        $stock = $request->input('stock'); // số lượng trong kho
        $price = $request->input('price');
        $url = $request->input('url');
        $sale = $request->input('sale');
        $position= $request->input('position');
        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $is_hot = 0;
        if ($request->has('is_hot')) { // kiem tra is_active co ton tai khong?
            $is_hot = $request->input('is_hot');
        }
        $category_id = (int)$request->input('category_id'); //


        $product = Product::find($id); //khởi tạo

        $product->name = $name;
        $product->slug = Str::slug($request->input('name'));
        $product->stock = $stock;
        $product->price = $price;
        $product->url = $url;
        $product->sale = $sale;
        $product->position = $position;
        $product->is_active = $is_active;
        $product->is_hot = $is_hot;
        $product->category_id = $category_id;

        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'upload/product/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $product->image = $path_image;
        }
        // $category->slug = Str::slug($request->input('name'));
        $product->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Product::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }
}
