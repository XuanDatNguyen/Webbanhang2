<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('backend.category.index');
        $category = Category::latest()->paginate(15); // select * from category order by id desc limit 20 offset 0
        // $data = User::all(); // select * from user

        return view('backend.category.index', [
            'data' => $category
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('backend.category.create',[
            'data' => $data
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
        // Kiểm tính đúng đắn của dữ liệu
        $request->validate([
            //    'parent_id' => 'required|integer',
            'name' => 'required|max:255',
            'type' => 'required|integer',
            //   'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
        ],[
            'name.required' => 'Bạn cần phải nhập vào họ tên',
            //   'parent_id.required' => 'Bạn cần phải nhập danh mục cha',

            //   'image.image' => 'File ảnh phải có dạng jpeg,png,jpg,gif,svg',
        ]);

        $name = $request->input('name'); // họ tên
        $parent_id = (int)$request->input('parent_id'); //
        $type = $request->input('type'); // phần loai
        $position= $request->input('position');

        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/category/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }

        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }

        $category = new Category();
        $category->name = $name;
        $category->type = $type;
        $category->position = $position;
        $category->parent_id = $parent_id;
        $category->image = $path_image;

        $category->save();

        // chuyen dieu huong trang
        return redirect()->route('category.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Category::destroy($id);
        if ($isDelete) {
            return response()->json(['success' => 1, 'message' => 'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Thất bại']);
        }
    }

}
