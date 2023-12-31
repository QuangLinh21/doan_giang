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
                                aria-describedby="inputGroup-sizing-default" name="search" value="{{ old('search') }}"
                                placeholder="Tìm kiếm ...">
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
                <div class="QA_table table-responsive " style="border: 2px solid #06B5DD">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @elseif(session()->has('error'))
                        <div class="alert alert-dannger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <h3 class="text-center mt-0 mb-4 ms-0 me-0 bg-info p-3">Hóa đơn khách hàng</h3>
                    <table class="table pt-0 p-3">
                        <thead>
                            @foreach ($detail_bill as $key => $item)
                                <tr>
                                    <td class="p-3"><b>{{ $key +=1 }}</b></td>
                                    <td><b>{{ $item->product_name }}&nbsp;x &nbsp;{{ $item->product_quantity }}</b></td>
                                    <td><b>{{ number_format($item->product_price, 0, ',', '.') }}&nbsp;&nbsp;VNĐ</b></td>
                                </tr>
                            @endforeach
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" class="p-3">Thuế</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p-3">Phí ship</td>
                                <td>Free ship</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p-3">Thành tiền</td>
                                <td>{{$detail_address->order_total}}&nbsp;&nbsp; VNĐ</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p-3">Khách hàng</td>
                                <td>{{$detail_address->customer_name}}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p-3">Số điện thoại</td>
                                <td>{{$detail_address->customer_phone}}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p-3">Địa chỉ</td>
                                <td>{{$detail_address->customer_address}}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p-3">Ghi chú</td>
                                <td>{{$detail_address->customer_note}}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="p-3">Trạng thái đơn hàng</td>
                                <td>{{$detail_address->order_status}}</td>
                            </tr>
                        </tbody>
                     
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
