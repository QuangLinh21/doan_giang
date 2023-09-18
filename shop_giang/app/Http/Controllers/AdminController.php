<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

session_start();
class AdminController extends Controller
{
   public function check_login(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
         return Redirect::to('main');
      }
      else {
         return Redirect::to('admin')->send();
      }

   }
   public function index(){
    return view('main_admin.layout.admin_login');
   }
   public function show_dashboard(){
     
      return view('main_admin.layout.main');
  }
  public function dashboard(Request $request){
   $admin_email = $request->admin_email;
   $admin_password = $request->password;
   $result = DB::table('admin')->where ('email_admin',$admin_email)->where('password',$admin_password)->first();
   //first() là lấy ra 1 bản ghi duy nhất
   if($result){
       Session::put('name_admin',$result->admin_name);
       // Session::put('admin_name',$result->admin_name:lấy từ biến result);
       Session::put('id_admin',$result->admin_id);
       return Redirect::to('/main');
   }
   else{
       Session::put('message','Mật khẩu hoặc tài khoản không đúng');
       return Redirect::to('/admin_login');
   }
}
}
