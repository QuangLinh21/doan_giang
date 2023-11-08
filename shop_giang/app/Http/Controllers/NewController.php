<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ContactModel;
use App\Models\NewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
session_start();

class NewController extends Controller
{
    public function check_login()
    {
       $id_admin = Session::get('id_admin');
       if ($id_admin) {
          return Redirect::to('admin');
       } else {
          return Redirect::to('dashboard')->send();
       }
    }
    public function admin_news(Request $request){
        $this->check_login();
        $key=$request->search;
        $new = NewModel::where('new_title','like','%'.$key.'%')->paginate(5)->appends(['search'=>$key]);
        return view('main_admin.page.list_news.news')->with('new',$new);
    }
    public function insert_new(){
        $this->check_login();
        return view('main_admin.page.list_news.create_new');
    }
    public function add_new(Request $request){
      
        $data = new NewModel();
        $data['new_title'] = $request->new_title;
        $data['new_des'] = $request->new_des;
        $data['new_content'] = $request->new_content;
        $data['new_img']=request('new_img');
        if($request->hasFile('new_img')){
            $file = $request->file('new_img');
            //dặt tên cho file img1
            $filename = time().'_'.$file->getClientOriginalName();
            //định nghĩa dẫn ssex upload lên
            $path_upload = 'uploads/news/';
            $request->file('new_img')->move($path_upload,$filename);
            $data -> new_img = $path_upload.$filename;
        }
        $data['new_status'] = $request->new_status;
       $data ->save();
        return Redirect('admin_news')->with('message','Thêm mới thành công')->with('error','Thêm mới không thành công');
    }
    public function del($new_id){
        // $data = CategoryModel::destroy($id_category);
        DB::table('news')->where('new_id',$new_id)->delete();
        return Redirect()->back()->with('message','Xóa danh mục thành công')->with('error','Xóa danh mục không thành công');
    }
    public function active_new($new_id){
        NewModel::where('new_id',$new_id)->update(['new_status'=>1]);
         return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
     }
     public function unactive_new($new_id){
        NewModel::where('new_id',$new_id)->update(['new_status'=>0]);
         return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
     }
     public function edit_new(Request $request, $new_id){
   
        $edit_new = NewModel::find($new_id);
        return view('main_admin.page.list_news.edit_new',compact('edit_new'));
     }
     public function update_new(Request $request,$new_id){
        $this->check_login();
            $new = NewModel::findorFail($new_id);
        $new['new_title'] = $request->new_title;
        $new['new_des'] = $request->new_des;
        $new['new_content'] = $request->new_content;
        if($request->hasFile('new_img')){ //kiểm tra img có đc chọn
            @unlink(public_path($new->new_img)); //xóa file cũ
            // get new_image
            $file = $request->file('new_img');
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            $path_upload = 'uploads/news/';
             // Thực hiện upload file
             $request->file('new_img')->move($path_upload,$filename);
             $new->new_img = $path_upload.$filename;
    
             $new->new_img = $path_upload.$filename; // gán giá trị ảnh mới cho thuộc tính image của đối tượng
           }
       $new ->save();
       return Redirect('admin_news');
     }
     public function tintuc(){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        $news = NewModel::where('new_status','1')->get();
        return view('user_page.pages.news.list_new',compact('news'))->with('category_list',$category) ->with('brand_list',$brand);
     }
     public function new_detail($new_detail){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        $new = NewModel::find($new_detail);
        return view('user_page.pages.news.new_detail',compact('new'))->with('category_list',$category) ->with('brand_list',$brand);
     }
     public function contact_us(){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        return view('user_page.pages.news.contact_us')->with('category_list',$category) ->with('brand_list',$brand);
     }

     public function send_contact(Request $request){
        $contact = new ContactModel();
        $contact['name'] = $request->name;
        $contact['phone'] = $request->phone;
        // $contact['email'] = $request->email_contact;
        $contact['message'] = $request->message;
        $contact->save();
        return Redirect()->back()->with('message','Giửi thành công');
     }
}
