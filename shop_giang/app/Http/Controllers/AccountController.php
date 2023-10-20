<?php

namespace App\Http\Controllers;

use App\Models\AccountModel;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;


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
      return redirect()->back();
   }
   public function login(){
      return view('user_page.pages.account.login');
   }
   public function login_user(LoginRequest $request){
      
   }
}
