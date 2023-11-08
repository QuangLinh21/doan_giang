<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\InfoCustomerModel;
use Doctrine\Inflector\Rules\English\InflectorFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Polyfill\Intl\Idn\Info;
use Cart;

session_start();

class PaymentController extends Controller
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
     public function order_product(Request $request){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        // $content = Cart::content();
        // dd( $content);
        //insert hình thức thanh toán
        $data = array();
        $data['payment_method'] = $request->ship;
        $data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        //insert_order
        $order = array();
        $order ['customer_id'] =Session::get('id_user');
        $order ['shipping_id'] = Session::get('shipping');
        $order ['payment_id'] = $payment_id;
        $order ['order_total'] = Cart::total();
        $order ['order_status'] = 'Đang chờ xử lý';
        $order_id = DB::table('tbl_order')->insertGetId( $order);

        //insert order_detail
        $content =  Cart::content();
        foreach($content as $val){
        $order_detail ['order_id']= $order_id;
        $order_detail ['product_id']= $val->id;
        $order_detail ['product_name']=$val->name;
        $order_detail ['product_price']=  $val->price;
        $order_detail ['product_quantity']= $val->qty;
        DB::table('tbl_order_details')->insert( $order_detail);
       }
       if( $data['payment_method']==1){
          Cart::destroy(); //reset giỏ hàng
          return view('user_page.pages.payment_user.ship_code')->with('category_list',$category) ->with('brand_list',$brand);
       }
       else{
        Cart::destroy(); //reset giỏ hàng
        return redirect('/');
       }
    //    return redirect('/');
     }
     public function delete_address_user($id_shipping){
        DB::table('info_customer')->where('id_shipping',$id_shipping)->delete();
        Session::put('shipping',null);
        return Redirect()->back();
     }
     public function cus_order(Request $request){
      $this->check_login();
      $key = $request->search;
        $list_order = DB::table('tbl_order')
        ->join('user','tbl_order.customer_id','=','user.id_user')
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->join('tbl_payment','tbl_order.payment_id','=','tbl_payment.payment_id')
        ->join('info_customer','tbl_order.shipping_id','=','info_customer.id_shipping')
        ->select('tbl_order_details.*','user.full_name','user.id_user','tbl_order.order_total','tbl_order.order_id','tbl_payment.payment_method','info_customer.*')
        ->orderBy('tbl_order.order_id','desc')
        ->where('full_name','like','%'.$key.'%')->paginate(10)->appends(['search'=>$key]);
        return view('main_admin.page.admin_order.list_bill',compact('list_order'));
     }

     public function bill_detail($order_id){
      $this->check_login();
      $detail_address = $detail_bill = DB::table('tbl_order')
      ->join('user','tbl_order.customer_id','=','user.id_user')
      ->join('tbl_payment','tbl_order.payment_id','=','tbl_payment.payment_id')
      ->join('info_customer','tbl_order.shipping_id','=','info_customer.id_shipping')
      ->select('user.full_name','tbl_order.order_total','tbl_order.order_status','tbl_order.order_id','tbl_payment.payment_method','info_customer.*')
      ->where('tbl_order.order_id',$order_id)
      ->first();
      $detail_bill = DB::table('tbl_order')
      ->join('user','tbl_order.customer_id','=','user.id_user')
      ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
      ->join('tbl_payment','tbl_order.payment_id','=','tbl_payment.payment_id')
      ->join('info_customer','tbl_order.shipping_id','=','info_customer.id_shipping')
      ->select('tbl_order_details.*','user.full_name','tbl_order.order_total','tbl_order.order_id','tbl_payment.payment_method','info_customer.*')
      ->where('tbl_order.order_id',$order_id)
      ->get();
      return view('main_admin.page.admin_order.bill_details',compact('detail_bill','detail_address'));
   }

}
