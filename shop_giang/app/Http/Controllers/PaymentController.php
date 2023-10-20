<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function login_checkout(){
        
    }
    public function login_user(){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        return view('user_page.pages.account_user.login_user')->with('category_list',$category) ->with('brand_list',$brand);
    }
}
