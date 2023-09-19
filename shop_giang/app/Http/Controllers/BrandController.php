<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    public function admin_brand(Request $request){
        $key = $request->search;
        $list_brand=BrandModel::where('name_brand','like','%'.$key.'%')->paginate(5)->appends(['search'=>$key]);
        return view('main_admin.page.admin_brand',compact('list_brand',$list_brand));
    }
    public function insert_brand(){
        return view('main_admin.page.create_brand');
    }
    public function add_brand(Request $request){
        $data=array();
        $data['name_brand'] = $request->name_brand;
        $data['description'] = $request->description;
        $data['status'] = $request->status;
        $data['place'] = $request->place_cate;
        DB::table('brand')->insert($data);
        return Redirect()->back()->with('message','Thêm mới thành công')->with('error','Thêm mới không thành công');
    }
    public function del_brand($id_brand){
        // $data = CategoryModel::destroy($id_category);
        $delete = DB::table('brand')->where('id_brand',$id_brand)->delete();
        if( $delete){
            return Redirect()->back()->with('message','Xóa danh mục thành công');
        }
        else
        {
            return Redirect()->back()->with('error','Xóa danh mục không thành công');
        }
    }
    public function edit_brand($id_brand){
        $edit_brand= DB::table('brand')->where('id_brand',$id_brand)->get();
        return view('main_admin.page.edit_brand',compact('edit_brand',$edit_brand));
    }
    public function update_brand(Request $request,$id_brand){
        $data = [];
        $data['name_brand']=$request->name_brand;
        $data['description']=$request->description;
        $data['place']=$request->place_brand;
        DB::table('brand')->where('id_brand',$id_brand)->update($data);
        return Redirect('/admin_brand')->with('message','Cập nhật danh mục thành công')->with('error','Cập nhật danh mục không thành công');
    }
    public function active_brand($id_brand){
       DB::table('brand')->where('id_brand',$id_brand)->update(['status'=>1]);
        return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
    }
    public function unactive_brand($id_brand){
        DB::table('brand')->where('id_brand',$id_brand)->update(['status'=>0]);
        return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
    }
}
