@extends('admin_layout')
@section('content')
    <div class="col-md-12">
        <h3>Thêm mới sản phẩm</h3>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-dannger">
                {{ session()->get('error') }}
            </div>
        @endif
     

        <form method="post" role="form" action="{{URL::to('update-product/'.$edit_product->id_product) }}" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="mb-3">
                    <label for="namecategory5" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" required name="name_product" id="namecategory5" value="{{$edit_product->name_product}}">
                </div>
                <div class="mb-3">
                    <label for="id_cate" class="form-label">Danh mục</label>
                    <select name="id_cate" required class="form-select">
                        @foreach ($id_cate as $product)
                            <option value="{{$product->id_category}}">{{$product->name_category}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="mb-3">
                    <label for="id_brand" class="form-label">Thương hiệu</label>
                    <select name="id_brand" required class="form-select">
                        @foreach ($id_brand as $product)
                            <option value="{{$product->id_brand}}">{{$product->name_brand}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="namecategory1" class="form-label">Giá sản phẩm</label>
                    <input type="text" class="form-control" required name="price" id="namecategory1"  value="{{$edit_product->price}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                    <textarea class="form-control" required name="description" rows="3">{{$edit_product->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea6" class="form-label">Ảnh 1</label>
                    <input type="file" class="form-control"  name="img1" id="namecategory1">
                    <img src="{{asset($edit_product->product_img1)}}" alt="" class="mt-3" style="width:100px; height:100px">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea7" class="form-label">Ảnh 2</label>
                    <input type="file" class="form-control"  name="img2" id="namecategory1">
                    <img src="{{asset($edit_product->product_img2)}}" alt="" class="mt-3" style="width:100px; height:100px">
                </div>

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Cập nhật</button>
                </div>
            </div>
        </form>
      
    </div>
@endsection
