<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\InfoCustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Polyfill\Intl\Idn\Info;

session_start();

class PaymentController extends Controller
{
    public function login_checkout(){
        
    }
    public function login_user(){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        return view('user_page.pages.account_user.login_user')->with('category_list',$category) ->with('brand_list',$brand);
    }
    public function payment_show(){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        $shipping = InfoCustomerModel::where('id_customer',Session::get('id_user'))->orderBy('id_shipping','DESC')->first();
        $shipping_id = InfoCustomerModel::where('id_customer',Session::get('id_user'))->orderBy('id_shipping','DESC')->get();
        if ($shipping) {
            Session::put('shipping', $shipping->id_shipping);
            // dd(Session::get('shipping'));
            return view('user_page.pages.payment_user.payment_product')->with('category_list',$category) ->with('brand_list',$brand)->with('address_cus',$shipping_id);
           
        } else {
            return view('user_page.pages.payment_user.payment_product')->with('category_list',$category) ->with('brand_list',$brand)->with('address_cus',$shipping_id);
        }
        
     }
     public function address_cus(Request $request){
        $data = new InfoCustomerModel();
        $data['id_customer'] = $request->id_customer;
        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_sdt;
        $data['customer_address'] = $request->customer_address;
        $data['customer_note'] = $request->customer_note;
        // dd($data);
       $data->save();
       return redirect()->back();
     }
     public function payment_end(){
        return redirect('/');
     }
}
