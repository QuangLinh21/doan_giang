@extends('admin_layout')
@section('content')
    <div class="col-md-12">
        <h3>Cập nhật thương hiệu</h3>
       
        @foreach ($edit_brand as $item)
            <form method="post" role="form" action="{{ URL::to('update-brand/' . $item->id_brand) }}">
                @csrf
                <div>

                    <div class="mb-3">
                        <label for="namecategory" class="form-label">Tên danh mục</label>
                        <input type="name" class="form-control" required name="name_brand"
                            value="{{ $item->name_brand }}" id="namecategory">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                        <textarea class="form-control" required  id="ckeditor1" name="description" rows="3">{{ $item->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="namecategory" class="form-label">Vị trí</label>
                        <input type="name" required class="form-control" name="place_brand" id="namecategory"
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
