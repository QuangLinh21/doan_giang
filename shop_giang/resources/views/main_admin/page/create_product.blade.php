@extends('admin_layout')
@section('content')
    <div class="col-md-12">
        <h3>Thêm mới sản phẩm</h3>
        <form method="post" role="form" action="{{ URL::to('add-product') }}" enctype="multipart/form-data">
            @csrf
          
            <div>
                <div class="mb-3">
                    <label for="namecategory5" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control"  name="name_product" id="namecategory5">
                    @error('name_product')
                    <span style="color:red; margin-top:5px;">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="id_cate" class="form-label">Danh mục</label>
                    <select name="id_cate"  class="form-select">
                        @foreach ($category as $item)
                            <option value="{{$item->id_category}}">{{$item->name_category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_brand" class="form-label">Thương hiệu</label>
                    <select name="id_brand" class="form-select">
                        @foreach ($brand as $item)
                            <option value="{{$item->id_brand}}">{{$item->name_brand}}</option>
                        @endforeach
                    </select>
                </div>
               
                <div class="mb-3">
                    <label for="namecategory1" class="form-label">Giá sản phẩm</label>
                    <input type="text" class="form-control" name="price" id="namecategory1">
                    @error('price')
                    <span style="color:red; margin-top:5px;">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                    <textarea class="form-control"  name="description" rows="3"></textarea>
                    @error('description')
                    <span style="color:red; margin-top:5px;">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea6" class="form-label">Ảnh 1</label>
                    <input type="file" class="form-control"  name="img1" id="namecategory1">
                    @error('img1')
                    <span style="color:red; margin-top:5px;">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea7" class="form-label">Ảnh 2</label>
                    <input type="file" class="form-control"  name="img2" id="namecategory1">
                    @error('img2')
                    <span style="color:red; margin-top:5px;">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Trạng thái</label>
                    <select name="status" id="status"  class="form-select">
                        <option value="1">Hiện</option>
                        <option value="0">Ẩn</option>
                    </select>
                    @error('status')
                    <span style="color:red; margin-top:5px;">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Thêm mới</button>
                </div>
            </div>
        </form>
    </div>
@endsection
