<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
use App\Models\ContactModel;

session_start();
class AdminController extends Controller
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
   public function index()
   {
      $this->check_login();
      return view('main_admin.layout.main');
   }
   public function dashboard(){
      return view('main_admin.layout.admin_login');
   }
   public function admin_dashboard(Request $request)
   {

      $admin_email = $request->username;
      $admin_password = $request->password;
      $result = DB::table('admin')->where('email_admin', $admin_email)->where('password', $admin_password)->first();
      //first() là lấy ra 1 bản ghi duy nhất
      if ($result) {
         Session::put('name_admin', $result->name_admin);
         // Session::put('admin_name',$result->admin_name:lấy từ biến result);
         Session::put('id_admin', $result->id_admin);
         return Redirect::to('/admin');
      } else {
         Session::put('message', 'Mật khẩu hoặc tài khoản không đúng');
         return Redirect()->back();
      }
   }
   public function logout(){
      $this->check_login();
      Session::put('name_admin',null);
      Session::put('id_admin',null);
      return Redirect::to('/dashboard');
   }
   public function admin_contact(Request $request){
      $key = $request->search;
      $this->check_login();
      $list_contact = ContactModel::where('name','like','%'.$key.'%')->paginate(5)->appends(['search'=>$key]);
      return view('main_admin.page.admin_contact.list_contact',compact('list_contact'));

   }
   public function delete_contact($contact_id){
      // $data = CategoryModel::destroy($id_category);
      $delete = DB::table('nv_contact')->where('contact_id',$contact_id)->delete();
      if( $delete){
          return Redirect()->back()->with('message','Xóa danh mục thành công');
      }
      else
      {
          return Redirect()->back()->with('error','Xóa danh mục không thành công');
      }
  }
   
}
