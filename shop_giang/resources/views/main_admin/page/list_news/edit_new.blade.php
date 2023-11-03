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
        <form method="post" role="form" action="{{URL::to('update_new/'.$edit_new->new_id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <div class="mb-3">
                    <label for="namecategory5" class="form-label">Tên Tin tức</label>
                    <input type="text" class="form-control"   name="new_title" value="{{$edit_new->new_title}}">
                  
                </div>
                <div class="mb-3">
                    <label for="namecategory1" class="form-label">Tóm tắt</label>
                    <input type="text" class="form-control" value="{{$edit_new->new_des}}" name="new_des" >
                  
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
                    <textarea class="form-control" id="ckeditornew"  name="new_content" rows="3">{{$edit_new->new_content}}</textarea>
                  
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea6" class="form-label">Ảnh </label>
                    <input type="file" class="form-control"   name="new_img" id="namecategory1">
                    <img src="{{asset($edit_new->new_img)}}" alt="" class="mt-3" style="width:100px; height:100px">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Thêm mới</button>
                </div>
            </div>
        </form>
    </div>
@endsection
