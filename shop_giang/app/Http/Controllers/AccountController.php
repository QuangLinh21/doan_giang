<?php

namespace App\Http\Controllers;

use App\Models\AccountModel;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();
class AccountController extends Controller
{
   public function register(){
    return view('user_page.pages.account.register');
   }
   public function create_acc(RegisterRequest $request){
      $acc = new AccountModel();
      $acc['full_name'] = $request->fullname;
      $acc['username'] = $request->username;
      $acc['password'] = $request->password;
      $acc->save();
      Mail::send('user_page.pages.account.email',compact('acc'),function ($email) use ($acc){
         $email->subject('Thông báo');
         $email->to($acc->username);
      });
      // return redirect()->back();
    
       return redirect('login_acc');
   }
   public function login(){
      return view('user_page.pages.account.login');
   }
   public function login_user(Request $request)
   {
       $username = $request->username;
       $password = $request->password;
      //  $result = AccountModel::where('username', $username)->where('password',$password)->get();
        $result = DB::table('user')->where('username', $username)->where('password', $password)->first();
            // ->join('tbl_shipping', 'tbl_customers.customer_id', '=', 'tbl_shipping.customer_id')
            // dd($result);
       if ($result) {
           Session::put('full_name', $result->full_name);
           Session::put('id_user', $result->id_user);
           
           return Redirect::to('/');
       } else {
         Session::put('message','Mật khẩu hoặc tài khoản không đúng');
           return Redirect()->back();
       }
   }
   public function checkout(){
      Session::put('full_name',null);
      Session::put('id_user',null);
      return Redirect::to('/');
   }
}
