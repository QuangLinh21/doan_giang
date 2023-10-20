@extends('admin_layout')
@section('content')
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30 QA_section">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Quản lý màu sản phẩm</h3>
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
                        <a href="{{ URL::to('/create_size_product') }}">Thêm mới màu sản phẩm</a>

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
                                <th scope="col">size</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col" colspan="2">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($size as $key => $item)
                                <tr>
                                    <td>{{$key++}}</td>
                                    <td class="nowrap">{{ $item->id_size }}</td>
                                    <td class="nowrap">{{ $item->name_size }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="text-center">
                                        <?php
                                        if ($item->status == 0) {
                                        ?>
                                            <a href="{{URL::to('active-size/'.$item->id_size)}}" class="btn btn-success text-white">Ẩn</a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="{{URL::to('unactive-size/'.$item->id_size)}}" class="btn btn-warning text-white">Hiển Thị</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td><a href="{{ URL::to('edit-size/'.$item->id_size) }}"><i class="fa-solid fa-gear"></i></a></td>
                                    <td> <a href="{{ URL::to('delete-size/'.$item->id_size) }}"
                                            onclick="return confirm('Bạn có muốn xóa danh mục này không?')"><i
                                                class="fa-solid fa-circle-xmark"></i></a> </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="data_Tables_paginate paging_simple_numbers mt-5">
                       
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection
