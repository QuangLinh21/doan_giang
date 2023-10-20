<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        $product = ProductModel::where('status',1)->paginate(4);
        $new_product = ProductModel::orderBy('id_product','desc')->limit(6)->get();
        return view('user_page.pages.home')->with('category_list',$category)->with('product',$product)->with('new_product',$new_product)
        ->with('brand_list',$brand);
    }
    public function category_main($id_category){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        $category_product =ProductModel::where('id_category',$id_category)->paginate(6);
        return view('user_page.pages.category.main-category')->with('category',$category_product)->with('category_list', $category)->with('brand_list', $brand);
    }
    public function brand_main($id_brand){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        $brand_product =ProductModel::where('id_brand',$id_brand)->paginate(6);
        return view('user_page.pages.brands.main-brands')->with('brand_product',$brand_product)->with('category_list', $category)->with('brand_list', $brand);
    }
}
