<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $category = CategoryModel::orderBy('place','ASC')->get();
        return view('user_page.pages.home',compact('category',$category));
    }
}
