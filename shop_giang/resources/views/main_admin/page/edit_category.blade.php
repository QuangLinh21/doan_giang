@extends('admin_layout')
@section('content')
    <div class="col-md-12">
        <h3>Cập nhật danh mục</h3>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-dannger">
                {{ session()->get('error') }}
            </div>
        @endif
        @foreach ($edit_cate as $item)
            <form method="post" role="form" action="{{ URL::to('update-cate/'.$item->id_category) }}" enctype="multipart/form-data">
                @csrf
                <div>

                    <div class="mb-3">
                        <label for="namecategory" class="form-label">Tên danh mục</label>
                        <input type="name" class="form-control" required name="name_cate"
                            value="{{ $item->name_category }}" id="namecategory">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                        <textarea class="form-control" required  id="ckeditor1" name="description" rows="3">{{ $item->description }}</textarea>
                    </div>
                    <td>
                        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                        <input type="file" name="img"  class="form-control" id="">
                        <img src="{{asset($item->img)}}" alt="" class="mt-3" style="width:100px; height:100px">
                    </td>
                    <div class="mb-3">
                        <label for="namecategory" class="form-label">Vị trí</label>
                        <input type="name" required class="form-control" name="place_cate" id="namecategory"
                            value="{{ $item->place }}">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Cập nhật</button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
@endsection
