<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Cart;
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
        return view('main_admin.page.create_product')->with('category',$id_cate)->with('brand',$id_brand);
    }
    public function add_product(ProductRequest $request){
        $product = new ProductModel();
        $product['name_product'] = $request->name_product;
        $product['id_category'] = $request->id_cate;
        $product['id_brand'] = $request->id_brand;
        $product['price'] = $request->price;
        $product['description'] = $request->description;
        $product['price'] = $request->price;
        $product['product_img1'] = $request->img1;
        $product['product_img2'] = $request->img2;
        if($request->hasFile('img1')){
            $file = $request->file('img1');
            //dặt tên cho file img1
            $filename = time().'_'.$file->getClientOriginalName();
            //định nghĩa dẫn ssex upload lên
            $path_upload = 'uploads/products/';
            $request->file('img1')->move($path_upload,$filename);
            $product -> product_img1 = $path_upload.$filename;
        }
        if($request->hasFile('img2')){
            $file = $request->file('img2');
            //dặt tên cho file img2
            $filename = time().'_'.$file->getClientOriginalName();
            //định nghĩa dẫn ssex upload lên
            $path_upload = 'uploads/products/';
            $request->file('img2')->move($path_upload,$filename);
            $product -> product_img2 = $path_upload.$filename;
        }
        $product['status'] = $request->status;
        $product->save();
        if($product){
            return redirect()->back()->with('message','Thêm mới thành công');
        }
        else{
            return redirect()->back()->with('error','Thêm mới không thành công');
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
        dd($id_product);
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
}
