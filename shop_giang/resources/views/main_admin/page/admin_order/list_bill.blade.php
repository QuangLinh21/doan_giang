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
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Thành tiền</th>
                                <th scope="col">Hình thức thanh toán</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Ghi chú</th>
                                <th scope="col">Chi tiết đơn hàng</th>
                                <th colspan="2">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach ($list_order as $key => $item)
                                <tr>
                                    <td>{{$key++}}</td>
                                    <td class="nowrap">{{ $item->full_name }}</td>
                                    {{-- <td class="nowrap">{{ number_format($item['order_total'],0,',','.')}}</td> --}}
                                    <td class="nowrap">{{$item->order_total}}</td>
                                    <td class="text-center">
                                        <?php
                                        if ($item->payment_method == 1) {
                                        ?>
                                            <a href="" class="btn btn-success text-white">Ship code</a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="" class="btn btn-warning text-white">ATM</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td class="nowrap">{{ $item->customer_address}}</td>
                                    <td class="nowrap">{{ $item->customer_phone}}</td>
                                    <td class="nowrap">{{ $item->customer_note}}</td>
                                    <td class="nowrap"><a href="{{URL::to('bill_detail/'.$item->order_id)}}" style="color: red;">Chi tiết hóa đơn</a></td>
                                    <td><a href=""><i class="fa-solid fa-gear"></i></a></td>
                                    <td> <a href=""
                                            onclick="return confirm('Bạn có muốn xóa danh mục này không?')"><i
                                                class="fa-solid fa-circle-xmark"></i></a> </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="data_Tables_paginate paging_simple_numbers mt-5">
                        {{$list_order->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection
