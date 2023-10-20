<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function admin_cate(Request $request){
        $key=$request->search;
        $all_cate=CategoryModel::where('name_category','like','%'.$key.'%')->paginate(5)->appends(['search'=>$key]);
        return view('main_admin.page.admin_category')->with('all_cate',$all_cate);
    }
    public function create_cate(){
        return view('main_admin.page.create_category');
    }
    public function add_category(Request $request){
        // $data=CategoryModel::create($request);
        // return Redirect::to('/admin_category',compact($data));
        $data = new CategoryModel();
        $data['name_category'] = $request->name_cate;
        $data['description'] = $request->description;
        $data['img']=request('img');
        if($request->hasFile('img')){
            $file = $request->file('img');
            //dặt tên cho file img1
            $filename = time().'_'.$file->getClientOriginalName();
            //định nghĩa dẫn ssex upload lên
            $path_upload = 'uploads/categorys/';
            $request->file('img')->move($path_upload,$filename);
            $data -> product_img1 = $path_upload.$filename;
        }
        $data['status'] = $request->status;
        $data['place'] = $request->place_cate;
       $data ->save();
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
       $data = CategoryModel::findorFail($id_category);
        $data['name_category']=$request->name_cate;
        $data['description']=$request->description;
        if($request->hasFile('img')){ //kiểm tra img có đc chọn
            @unlink(public_path($data->img)); //xóa file cũ
            // get new_image
            $file = $request->file('img');
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            $path_upload = 'uploads/categorys/';
             // Thực hiện upload file
             $request->file('img')->move($path_upload,$filename);
             $data->img = $path_upload.$filename;
    
             $data->img = $path_upload.$filename; // gán giá trị ảnh mới cho thuộc tính image của đối tượng
           }
        $data['place']=$request->place_cate;
        $data->save();
        return redirect('ad_category')->with('message','Cập nhật danh mục thành công')->with('error','Cập nhật danh mục không thành công');
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

