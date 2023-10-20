@extends('admin_layout')
@section('content')
    <div class="col-md-12">
        <h3>Thêm mới màu sắc sản phẩm</h3>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-dannger">
                {{ session()->get('error') }}
            </div>
        @endif
        <form method="post" role="form" action="{{ URL::to('add-color') }}">
            @csrf
            <div>
                <div class="mb-3">
                    <label for="namecategory" class="form-label">Tên màu</label>
                    <input type="name" class="form-control" required name="name_color" id="namecategory">
                </div>
                <div class="mb-3">
                    <label for="namecategory" class="form-label">Mã màu</label>
                    <input type="name" class="form-control" required name="ma_color" id="namecategory">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                    <textarea class="form-control" required  name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="namecategory" class="form-label">Trạng thái</label>
                    <select name="status" required class="form-select">
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