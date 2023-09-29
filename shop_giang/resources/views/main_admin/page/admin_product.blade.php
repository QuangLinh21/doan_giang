@extends('admin_layout')
@section('content')
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30 QA_section">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Quản lý sản phẩm</h3>
                    </div>
                    <form>
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default" name="search" value="{{old('search')}}" placeholder="Tìm kiếm ...">
                            <button type="submit" class="btn btn-success">search</button>
                        </div>
                    </form>
                    <div class="header_more_tool">
                        {{-- <a href="{{URL::to('/insert_category')}}">Thêm mới danh mục</a> --}}
                        <a href="{{ URL::to('/insert-product') }}">Thêm mới sản phẩm</a>

                    </div>
                </div>
                <div class="box_header m-0">

                </div>
            </div>
            <div class="white_card_body">
                <div class="QA_table table-responsive ">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @elseif(session()->has('error'))
                        <div class="alert alert-dannger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <table class="table pt-0">
                        <thead>

                            <tr>
                                <th>STT</th>
                                <th scope="col">Mã sản phẩm</th>
                                <th scope="col">Mã danh mục</th>
                                <th scope="col">Mã thương hiệu</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Ảnh 1</th>
                                <th scope="col">Ảnh 2</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Đánh giá</th>
                                <th colspan="2">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach ($list_product as $key => $item)
                                <tr>
                                    <td>{{$key++}}</td>
                                    <td class="nowrap">{{ $item->id_product }}</td>
                                    <td class="nowrap">{{ $item->id_category }}</td>
                                    <td class="nowrap">{{ $item->id_brand }}</td>
                                    <td class="nowrap">{{ $item->name_product }}</td>
                                    <td class="nowrap">{{ $item->price }}</td>
                                    <td class="nowrap">{{ $item->description}}</td>
                                    <td class="nowrap text-center"><img src="{{asset($item->product_img1)}}" style="width: 40px"></td>
                                    <td class="nowrap  text-center"><img src="{{asset($item->product_img2)}}" style="width: 40px"></td>
                                    <td class="nowrap">{{ $item->status}}</td>
                                    <td class="text-center">
                                        <?php
                                        if ($item->status == 0) {
                                        ?>
                                            <a href="{{URL::to('active-product/'.$item->id_product)}}" class="btn btn-success text-white">Ẩn</a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="{{URL::to('unactive-product/'.$item->id_product)}}" class="btn btn-warning text-white">Hiện</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td class="nowrap">{{ $item->rating}}</td>
                                    <td>{{ $item->place }}</td>
                                    <td><a href="{{ URL::to('edit-product/'.$item->id_product) }}"><i class="fa-solid fa-gear"></i></a></td>
                                    <td> <a href="{{ URL::to('delete-product/'.$item->id_product) }}"
                                            onclick="return confirm('Bạn có muốn xóa danh mục này không?')"><i
                                                class="fa-solid fa-circle-xmark"></i></a> </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="data_Tables_paginate paging_simple_numbers mt-5">
                        {{$list_product->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection
