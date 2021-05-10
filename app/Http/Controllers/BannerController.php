<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::latest()->paginate(5);
        return view('backend.banner.index', [
            'data'=>$banner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner = Banner::all();
        return view('backend.banner.create', [
            'data'=>$banner
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
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'position' => 'required',
        ],[
            'title.required' => 'Bạn cần phải nhập vào tiêu đề',
            'image.required' => 'Bạn cần phải lựa chọn ảnh',
            'image.mimes' => 'File ảnh phải có dạng jpeg,png,jpg,gif,svg',
            'position.required' => 'Bạn cần phải chọn vị trí',
        ]);

        $title  = $request->input('title');
        $url  = $request->input('url');
        $target  = $request->input('target');
        $type  = $request->input('type');
        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $position=0;
        if($request->has('position')){
            $position = $request->input('position');
        }
        $description = $request->input('description');
        $path_image = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/banner/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
        }

        $banner = new Banner();
        $banner->title = $title;
        $banner->slug = Str::slug($request->input('title'));
        $banner->url = $url;
        $banner->target = $target;
        $banner->type = $type;
        $banner->is_active = $is_active;
        $banner->position = $position;
        $banner->description = $description;
        $banner->image = $path_image;
        //lưu vào db
        $banner->save();
        //Chuyen huong ve trang danh sach
        return redirect()->route('admin.banner.index');
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
        $banner = Banner::find($id);

        return view('backend.banner.edit', [
            'data'=>$banner
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
            'title' => 'required|max:255',
            'position' => 'required',
        ],[
            'title.required' => 'Bạn cần phải nhập vào tiêu đề',
            'position.required' => 'Bạn cần phải chọn vị trí',
        ]);

        $title  = $request->input('title');
        $url  = $request->input('url');
        $target  = $request->input('target');
        $type  = $request->input('type');
        $is_active = 0;
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $position=0;
        if($request->has('position')){
            $position = $request->input('position');
        }
        $description = $request->input('description');

        $banner = Banner::find($id);
        $banner->title = $title;
        $banner->slug = Str::slug($request->input('title'));
        $banner->url = $url;
        $banner->target = $target;
        $banner->type = $type;
        $banner->is_active = $is_active;
        $banner->position = $position;
        $banner->description = $description;
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'upload/banner/';
            // upload file
            $file->move($path_upload,$filename);
            $path_image = $path_upload.$filename;
            $banner->image = $path_image;
        }

        $banner->save();
        //Chuyen huong ve trang danh sach
        return redirect()->route('admin.banner.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // gọi tới hàm destroy của laravel để xóa 1 object
        // DELETE FROM ten_bang WHERE id = 33 -> execute command
        $isDelete = Banner::destroy($id); //true/false

        if ($isDelete) { // xóa thành công
            return response()->json(['success' => 1, 'message' => 'Success']);
        } else {
            return response()->json(['success' => 0, 'message' => 'Fail']);
        }
    }
}
