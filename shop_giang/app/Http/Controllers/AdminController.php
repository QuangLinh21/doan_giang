<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
      $admin_email = $request->admin_email;
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
}
