<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(5);
        return view('backend.brand.index', [
            'data'=>$brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('backend.brand.create', [
            'data'=>$brands
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
        $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
        ],[
            'name.required' => 'Tên thương hiệu không được để trống',
            'name.max' => 'Tên thương hiệu tối đa 255 ký tự',
            'position.required' => 'Bạn cần phải chọn vị trí',
        ]);

        $name = $request->input('name');
        $website = $request->input('website');
        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $position=0;
        if($request->has('position')){
            $position = $request->input('position');
        }
        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/brand/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }

        $brand = new Brand();
        $brand->name = $name;
        $brand->slug = Str::slug($request->input('name'));
        $brand->website = $website;
        $brand->is_active = $is_active;
        $brand->position = $position;
        $brand->image = $path_image;
        //lưu vào db
        $brand->save();
        //Chuyen huong ve trang danh sach
        return redirect()->route('admin.brand.index');
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
        $brand = Brand::find($id);
        return view('backend.brand.edit', [
            'data'=>$brand
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
        $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
        ],[
            'name.required' => 'Tên thương hiệu không được để trống',
            'name.max' => 'Tên thương hiệu tối đa 255 ký tự',
            'position.required' => 'Bạn cần phải chọn vị trí',
        ]);

        $name = $request->input('name');
        $website = $request->input('website');
        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $position=0;
        if($request->has('position')){
            $position = $request->input('position');
        }

        $brand = Brand::find($id);
        $brand->name = $name;
        $brand->slug = Str::slug($request->input('name'));
        $brand->website = $website;
        $brand->is_active = $is_active;
        $brand->position = $position;
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/brand/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $brand->image = $path_image;
        }
        //lưu vào db
        $brand->save();
        //Chuyen huong ve trang danh sach
        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Brand::destroy($id); //true/false

        if ($isDelete) { // xóa thành công
            return response()->json(['success' => 1, 'message' => 'Success']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Fail']);
        }
    }
}
