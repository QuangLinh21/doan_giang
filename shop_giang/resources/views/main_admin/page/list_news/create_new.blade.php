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
        <form method="post" role="form" action="{{URL::to('add_new')}}" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="mb-3">
                    <label for="namecategory5" class="form-label">Tên Tin tức</label>
                    <input type="text" class="form-control" value="{{ old('new_title') }}"  name="new_title" id="namecategory5">
                  
                </div>
                <div class="mb-3">
                    <label for="namecategory1" class="form-label">Tóm tắt</label>
                    <input type="text" class="form-control" value="{{ old('price') }}" name="new_des" id="namecategory1">
                  
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
                    <textarea class="form-control" id="ckeditornew" value="{{ old('description') }}"  name="new_content" rows="3"></textarea>
                  
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea6" class="form-label">Ảnh </label>
                    <input type="file" class="form-control" value="{{ old('img1') }}"  name="new_img" id="namecategory1">
                  
                </div>
            
                <div class="mb-3">
                    <label for="status" class="form-label">Trạng thái</label>
                    <select name="new_status" id="status"  class="form-select">
                        <option value="1">Hiện</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Thêm mới</button>
                </div>
            </div>
        </form>
    </div>
@endsection
