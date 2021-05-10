<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Vendor::latest()->paginate(10);
        return view('backend.vendor.index', [
            'data'=>$vendor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendor = Vendor::all();
        return view('backend.vendor.create', [
            'data'=>$vendor
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
        $email = $request->input('email');
        $website = $request->input('website');
        $hotline = $request->input('phone');
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
            $path_upload = 'upload/vendor/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }

        $vendor = new Vendor();
        $vendor->name = $name;
        $vendor->slug = Str::slug($request->input('name'));
        $vendor->email = $email;
        $vendor->website = $website;
        $vendor->phone = $hotline;
        $vendor->is_active = $is_active;
        $vendor->position = $position;
        $vendor->image = $path_image;
        //lưu vào db
        $vendor->save();
        //Chuyen huong ve trang danh sach
        return redirect()->route('admin.vendor.index');
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
        $vendor = Vendor::find($id);
        return view('backend.vendor.edit', [
            'data'=>$vendor
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
        $email = $request->input('email');
        $website = $request->input('website');
        $hotline = $request->input('phone');
        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $position=0;
        if($request->has('position')){
            $position = $request->input('position');
        }


        $vendor = Vendor::find($id);
        $vendor->name = $name;
        $vendor->slug = Str::slug($request->input('name'));
        $vendor->email = $email;
        $vendor->website = $website;
        $vendor->phone = $hotline;
        $vendor->is_active = $is_active;
        $vendor->position = $position;
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/vendor/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $vendor->image = $path_image;
        }
        //lưu vào db
        $vendor->save();
        //Chuyen huong ve trang danh sach
        return redirect()->route('admin.vendor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Vendor::destroy($id); //true/false

        if ($isDelete) { // xóa thành công
            return response()->json(['success' => 1, 'message' => 'Success']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Fail']);
        }
    }
}
