<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function admin_cate(){
        $all_cate = DB::table('category')->get();
        return view('main_admin.page.admin_category')->with('all_cate',$all_cate);
    }
    public function create_cate(){
        return view('main_admin.page.create_category');
    }
    public function add_category(Request $request){
        // $data=CategoryModel::create($request);
        // return Redirect::to('/admin_category',compact($data));
        $data=array();
        $data['name_category'] = $request->name_cate;
        $data['description'] = $request->description;
        $data['status'] = $request->status;
        $data['place'] = $request->place_cate;
        DB::table('category')->insert($data);
        return Redirect()->back()->with('message','Thêm mới thành công')->with('error','Thêm mới không thành công');

    }
    public function del_category($id_category){
        // $data = CategoryModel::destroy($id_category);
        DB::table('category')->where('id_category',$id_category)->delete();
        return Redirect()->back()->with('message','Xóa danh mục thành công')->with('error','Xóa danh mục không thành công');
    }
    public function edit_category($id_category){
        $edit_cate = DB::table('category')->where('id_category',$id_category)->get();
        return view('main_admin.page.edit_category',compact('edit_cate',$edit_cate));
    }
    public function update_category(Request $request,$id_category){
        $data = [];
        $data['name_category']=$request->name_cate;
        $data['description']=$request->description;
        $data['place']=$request->place_cate;
        DB::table('category')->where('id_category',$id_category)->update($data);
        return redirect()->back()->with('message','Cập nhật danh mục thành công')->with('error','Cập nhật danh mục không thành công');
    }
    public function active_cate($id_category){
       DB::table('category')->where('id_category',$id_category)->update(['status'=>1]);
        return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
    }
    public function unactive_cate($id_category){
        DB::table('category')->where('id_category',$id_category)->update(['status'=>0]);
        return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
    }
}

