<?php

namespace App\Http\Controllers;

use App\Models\ColorModel;
use App\Models\SizeModel;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function admin_color(Request $request){
        $key=$request->search;
        $color = ColorModel::where('name_color','like','%'.$key.'%')->paginate(5)->appends(['search'=>$key]);
        return view('main_admin.page.admin_color',compact('color'));
    }
    public function create_color(){
        return view('main_admin.page.create_color_product');
    }
    public function add_color(Request $request){
        $color=new ColorModel();
        $color['name_color'] = $request->name_color;
        $color['color'] = $request->ma_color;
        $color['description'] = $request->description;
        $color['status'] = $request->status;
       $color->save();
        return Redirect()->back()->with('message','Thêm mới thành công')->with('error','Thêm mới không thành công');
    }
    public function active_color($id_color){
        colorModel::where('id_color',$id_color)->update(['status'=>1]);
        return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
     }
     public function unactive_color($id_color){
        colorModel::where('id_color',$id_color)->update(['status'=>0]);
         return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
     }
     public function delete_color($id_color){
        $delete_color = colorModel::destroy($id_color);
        if($delete_color){
            return redirect()->back()->with('message','Xóa sản phẩm thành công');
        }
        else{
            return redirect()->back()->with('error','Xóa sản phẩm thành công');
        }
    }

    // --------------------------size----------------------------------------
    public function admin_size(Request $request){
        $key=$request->search;
        $size = SizeModel::where('name_size','like','%'.$key.'%')->paginate(5)->appends(['search'=>$key]);
        return view('main_admin.page.admin_size',compact('size'));
        
    }
    public function create_size(){
        return view('main_admin.page.create_size_product');
    }
    public function add_size(Request $request){
        $size=new sizeModel();
        $size['name_size'] = $request->size;
        $size['description'] = $request->description;
        $size['status'] = $request->status;
       $size->save();
        return Redirect()->back()->with('message','Thêm mới thành công')->with('error','Thêm mới không thành công');
    }
    public function active_size($id_size){
        sizeModel::where('id_size',$id_size)->update(['status'=>1]);
        return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
     }
     public function unactive_size($id_size){
        sizeModel::where('id_size',$id_size)->update(['status'=>0]);
         return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
     }
     public function delete_size($id_size){
        $delete_size = sizeModel::destroy($id_size);
        if($delete_size){
            return redirect()->back()->with('message','Xóa sản phẩm thành công');
        }
        else{
            return redirect()->back()->with('error','Xóa sản phẩm thành công');
        }
    }
}
