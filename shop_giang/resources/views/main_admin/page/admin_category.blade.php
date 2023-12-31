@extends('admin_layout')
@section('content')
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30 QA_section">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Quản lý danh mục</h3>
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
                        <a href="{{ URL::to('/insert-category') }}">Thêm mới danh mục</a>

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
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Vị trí</th>
                                <th scope="col" colspan="2">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_cate as $key => $item)
                                <tr>
                                    <td>{{$key++}}</td>
                                    <td class="nowrap">{{ $item->id_category }}</td>
                                    <td class="nowrap">{{ $item->name_category }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="nowrap  text-center"><img src="{{asset($item->img)}}" style="width: 60px"></td>
                                    <td class="text-center">
                                        <?php
                                        if ($item->status == 0) {
                                        ?>
                                            <a href="{{URL::to('active-cate/'.$item->id_category)}}" class="btn btn-success text-white">Ẩn</a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="{{URL::to('unactive-cate/'.$item->id_category)}}" class="btn btn-warning text-white">Hiển Thị</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>{{ $item->place }}</td>
                                    <td><a href="{{ URL::to('edit-category/'.$item->id_category) }}"><i class="fa-solid fa-gear"></i></a></td>
                                    <td> <a href="{{ URL::to('delete-category/'.$item->id_category) }}"
                                            onclick="return confirm('Bạn có muốn xóa danh mục này không?')"><i
                                                class="fa-solid fa-circle-xmark"></i></a> </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="data_Tables_paginate paging_simple_numbers mt-5">
                        {{$all_cate->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection
