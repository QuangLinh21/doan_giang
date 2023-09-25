<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

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
    public function add_product(Request $request){
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
            return redirect()->back()->with('message','Thêm mới thành công');
    }
}
