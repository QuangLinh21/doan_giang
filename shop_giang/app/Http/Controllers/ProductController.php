<?php

namespace App\Http\Controllers;

use App\Models\CommonModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\SizeModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function admin_product(Request $request){
        $key = $request->search;
        $list_product=ProductModel::where('name_product','like','%'.$key.'%')->paginate(5)->appends(['search'=>$key]);
        return view('main_admin.page.admin_product',compact('list_product',$list_product));
        

    }
    public function create_product(){
        $id_cate = CategoryModel::select('id_category','name_category')->get();
        $id_brand = BrandModel::select('id_brand','name_brand')->get();
        $size = SizeModel::get();
        return view('main_admin.page.create_product')->with('category',$id_cate)->with('brand',$id_brand)->with('size',$size);
    }
    public function add_product(ProductRequest $request){
        // Tạo một sản phẩm mới
        $product = new ProductModel();
        $product->name_product = $request->name_product;
        $product->id_category = $request->id_cate;
        $product->id_brand = $request->id_brand;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status;
    
        if ($request->hasFile('img1')) {
            $file = $request->file('img1');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path_upload = 'uploads/products/';
            $request->file('img1')->move($path_upload, $filename);
            $product->product_img1 = $path_upload . $filename;
        }
    
        if ($request->hasFile('img2')) {
            $file = $request->file('img2');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path_upload = 'uploads/products/';
            $request->file('img2')->move($path_upload, $filename);
            $product->product_img2 = $path_upload . $filename;
        }
    
        $product->save();
    
        // Tạo một sản phẩm chung liên quan đến sản phẩm vừa tạo
        $common_product = new CommonModel();
        $common_product->id_product = $product->id_product; // Lấy id của sản phẩm vừa tạo
        $common_product->id_size = $request->id_size;
        $common_product->save();
        if ($product && $common_product) {
            return redirect()->back()->with('message', 'Thêm mới thành công');
        } else {
            return redirect()->back()->with('error', 'Thêm mới không thành công');
        }
    }
    
    public function edit_product($id_product){
         $edit_product = ProductModel::find($id_product);
        // $edit_product = ProductModel::where('id_product',$id_product)->first();
        $id_cate = CategoryModel::select('id_category','name_category')->get();
        $id_brand = BrandModel::select('id_brand','name_brand')->get();
      
        return view('main_admin.page.edit_product',compact('edit_product','id_cate','id_brand'));
    }
    public function update_product(Request $request, $id_product){
        // dd($id_product);
        $product = ProductModel::findorFail($id_product);
        $product->name_product = $request->input('name_product');
        $product->id_category = $request->input('id_cate');
        $product->id_brand = $request->input('id_brand');
        $product->price = $request->input('price');
       if($request->hasFile('img1')){ //kiểm tra img có đc chọn
        @unlink(public_path($product->product_img1)); //xóa file cũ
        // get new_image
        $file = $request->file('img1');
        $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
        $path_upload = 'uploads/products/';
         // Thực hiện upload file
         $request->file('img1')->move($path_upload,$filename);
         $product->product_img1 = $path_upload.$filename;

         $product->product_img1 = $path_upload.$filename; // gán giá trị ảnh mới cho thuộc tính image của đối tượng
       }
       if($request->hasFile('img2')){ //kiểm tra img có đc chọn
        @unlink(public_path($product->product_img2)); //xóa file cũ
        // get new_image
        $file = $request->file('img2');
        $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
        $path_upload = 'uploads/products/';
         // Thực hiện upload file
         $request->file('img2')->move($path_upload,$filename);
         $product->product_img2 = $path_upload.$filename;

         $product->product_img2 = $path_upload.$filename; // gán giá trị ảnh mới cho thuộc tính image của đối tượng
       }
       $product->save();
       return redirect()->back();
    }
    public function delete_product($id_product){
        $delete_product = ProductModel::destroy($id_product);
        if($delete_product){
            return redirect()->back()->with('message','Xóa sản phẩm thành công');
        }
        else{
            return redirect()->back()->with('error','Xóa sản phẩm thành công');
        }
    }

    public function active_product($id_product){
        ProductModel::where('id_product',$id_product)->update(['status'=>1]);
        return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
     }
     public function unactive_product($id_product){
        ProductModel::where('id_product',$id_product)->update(['status'=>0]);
         return Redirect()->back()->with('message','Cập nhật trạng thái thành công')->with('error','Cập nhật trạng thái không thành công !');
     }
     public function show_product_detail(Request $request, $id_product){
        $product = ProductModel::find($id_product);
        return response()->json($product);
     }
     public function quickview(Request $request){
        $id_product = $request->product_id;
        $product = ProductModel::find($id_product);
        $output['name_product'] = $product->name_product;
        $output['id_product'] = $product->id_product;
        $output['product_img1'] = '<img class="hover-img" src="{{ asset($item->product_img1) }}" alt="Product Images" height="310px">';;
        $output['product_img2'] = '<img class="hover-img" src="{{ asset($item->product_img2) }}" alt="Product Images" height="310px">';
        $output['price'] =  $product->price;
        echo json_encode($output);
     }
    //  public function detail_product($id_product){
    //     // $info_product = DB::table('common_product')->where('id_product',$id_product)->get();
    //     $info_product = DB::table('product')
    //     ->join('common_product', 'product.id_product','=', 'common_product.id_product')
    //     ->join('size', 'common_product.id_size','=','size.id_size')
    //     ->join('color','common_product.id_color','=','color.id_color')
    //     ->select('product.*','size.id_size','size.name_size','color.id_color','color.name_color')
    //     ->where('product.id_product',$id_product)->get();
    //     return view('user_page.pages.products.detail_product')->with('info_product',$info_product);
    //  }
     public function detail_product($id_product){
        // $info_product = DB::table('common_product')->where('id_product',$id_product)->get();
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        $info_product = DB::table('product')->where('product.id_product',$id_product)->get();
        $option_product = DB::table('common_product')
        ->join('size', 'common_product.id_size','=','size.id_size')
        ->where('common_product.id_product',$id_product)->get();
        return view('user_page.pages.products.detail_product')->with('info_product',$info_product)
        ->with('option_product',$option_product)->with('category_list', $category)->with('brand_list', $brand);
     }
     public function save_cart(Request $request){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        $product_id = $request->product_id_hidden;
        $quantity = $request->qty;
        $size=$request->size;
        $color=$request->color;
        // dd($product_id,$size,$color,$quantity);
        $product_info = DB::table('product')->where('id_product',$product_id)->first();
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();
        $data['id'] =  $product_info->id_product;
        $data['qty'] =  $quantity;
        $data['name'] =  $product_info->name_product;
        $data['price'] =  $product_info->price;
        $data['weight'] =  $product_info->price;
        $data['options']['images'] =  $product_info->product_img1;
        $data['options']['size'] =  $size;
        $data['options']['color'] =  $color;
        Cart::add($data);
        Cart::setGlobalTax(10);
        Cart::count();
        return redirect::to('/show-cart');
     }
     public function show_cart(){
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        return view('user_page.pages.cart.show_cart')->with('category_list', $category)->with('brand_list', $brand);
     }
     public function delete_cart_item($id_product){
        Cart::update($id_product,0);
        return redirect()->back();
     }
     public function update_cart_qty(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_qty;
        Cart::update($rowId,$qty);
        return redirect()->back();
     }
     public function search(Request $request){
        $key_word = $request->keyword;
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        $result = ProductModel::where('name_product','like','%'.$key_word.'%')->paginate(6);
        if($result !== ''){
            return view('user_page.pages.products.search_result')->with('category_list', $category)->with('brand_list', $brand)->with('result',$result);
        }
        else{
            echo 'Không có sản phẩm nào';
            return view('user_page.pages.products.search_result');
        }
        
     }
     public function filter_brand(Request $request){
        $product = $request->locsanpham;
        $brand_product = $request->id_brand;
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        switch ($product){
            case 'desc_price_pro':
                $list_product = ProductModel::orderBy('price','desc')->where('id_brand',$brand_product)->get();
                return view('user_page.pages.products.filter_product')->with('category_list', $category)->with('brand_list', $brand)->with('list_product',$list_product);
                break;
            case 'asc_price_pro':
                $list_product = ProductModel::orderBy('price','asc')->where('id_brand',$brand_product)->get();
                return view('user_page.pages.products.filter_product')->with('category_list', $category)->with('brand_list', $brand)->with('list_product',$list_product);
                break;
            case 'desc_product':
                $list_product = ProductModel::orderBy('id_product','desc')->where('id_brand',$brand_product)->get();
                return view('user_page.pages.products.filter_product')->with('category_list', $category)->with('brand_list', $brand)->with('list_product',$list_product);
                break;
            case 'esc_product':
                 $list_product = ProductModel::orderBy('id_product','asc')->where('id_brand',$brand_product)->get();
                return view('user_page.pages.products.filter_product')->with('category_list', $category)->with('brand_list', $brand)->with('list_product',$list_product);
                break;
            default:
                echo 'Không tìm thấy sản phẩm';
                break;

        }

     }
     public function filter_product(Request $request){
        $product = $request->locsanpham;
        $cate_product = $request->id_cate;
        $brand = BrandModel::orderBy('place','ASC')->get();
        $category = CategoryModel::orderBy('place','ASC')->get();
        switch ($product){
            case 'desc_price_pro':
                $list_product = ProductModel::orderBy('price','desc')->where('id_category',$cate_product)->get();
                return view('user_page.pages.products.filter_product')->with('category_list', $category)->with('brand_list', $brand)->with('list_product',$list_product)->with('cate_product',$cate_product);
                break;
            case 'asc_price_pro':
                $list_product = ProductModel::orderBy('price','asc')->where('id_category',$cate_product)->get();
                return view('user_page.pages.products.filter_product')->with('category_list', $category)->with('brand_list', $brand)->with('list_product',$list_product)->with('cate_product',$cate_product);
                break;
            case 'desc_product':
                $list_product = ProductModel::orderBy('id_product','desc')->where('id_category',$cate_product)->get();
                return view('user_page.pages.products.filter_product')->with('category_list', $category)->with('brand_list', $brand)->with('list_product',$list_product)->with('cate_product',$cate_product);
                break;
            case 'esc_product':
                 $list_product = ProductModel::orderBy('id_product','asc')->where('id_category',$cate_product)->get();
                return view('user_page.pages.products.filter_product')->with('category_list', $category)->with('brand_list', $brand)->with('list_product',$list_product)->with('cate_product',$cate_product);
                break;
            default:
                echo 'Không tìm thấy sản phẩm';
                break;

        }

     }
    
}
