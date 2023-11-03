@extends('welcome')
@section('content')
<div class="header-top-campaign">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="header-campaign-activation axil-slick-arrow arrow-both-side header-campaign-arrow">
                    <div class="slick-slide">
                        <div class="campaign-content">
                            <p>ĐẢM BẢO HÀNG CHÍNH HÃNG : <a href="#">GET OFFER</a></p>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="campaign-content">
                            <p>CHÍNH SÁCH BẢO HÀNH UY TÍN : <a href="#">GET OFFER</a></p>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="campaign-content">
                            <p>HỖ TRỢ KHÁCH HÀNG 24/7 : <a href="#">GET OFFER</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <h1 class="title">Explore All Products</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->

    <!-- Start Shop Area  -->
    <div class="axil-shop-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('user_page.layout.sidebar')
                    <!-- End .axil-shop-sidebar -->
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="axil-shop-top mb--40">
                                <div
                                class="category-select align-items-center justify-content-lg-end justify-content-between">
                                <!-- Start Single Select  -->
                               
                                <form action="{{URL::to('filter_product')}}" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id_cate" value="{{$cate_product}}">
                                    <select class="single-select" id="input_filter" name="locsanpham">
                                        <option value="desc_price_pro">Giá từ cao tới thấp</option>
                                        <option value="asc_price_pro">Giá từ thấp tới cao</option>
                                        <option value="desc_product">Sản phẩm mới</option>
                                        <option value="esc_product">Sản phẩm cũ</option>
                                    </select>
                                </form>
                                <!-- End Single Select  -->
                            </div>
                                <div class="d-lg-none">
                                    <button class="product-filter-mobile filter-toggle"><i class="fas fa-filter"></i>
                                        FILTER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .row -->
                    <div class="row row--15">
                        @foreach ($list_product as $item)
                        <div class="col-xl-4 col-sm-6">
                            <div class="axil-product product-style-one mb--30">
                                <div class="thumbnail">
                                    <a href="{{URL::to('detail_product/'.$item->id_product)}}">
                                        <img src="{{asset($item->product_img1)}}" alt="Product Images">
                                    </a>
                                    <div class="product-hover-action">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a href="wishlist.html"><i
                                                        class="far fa-heart"></i></a></li>
                                                        <li class="select-option">
                                                            <a href="{{URL::to('detail_product/'.$item->id_product)}}">
                                                                Add to Cart
                                                            </a>
                                                        </li>
                                            <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <h5 class="title"><a href="single-product.html">{{$item->name_product}}</a></h5>
                                        <div class="product-price-variant">
                                            <span class="price current-price">{{ number_format($item['price'], 0, ',', '.') }}
                                                VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{-- <div class="data_Tables_paginate paging_simple_numbers mt-5">
                        {{ $result->links('pagination::bootstrap-4') }}
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End Shop Area  -->
</main>
 <!-- Product Quick View Modal Start -->
@endsection