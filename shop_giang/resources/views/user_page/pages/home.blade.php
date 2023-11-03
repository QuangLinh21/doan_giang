@extends('welcome')
@section('content')
    @include('user_page.layout.banner-home')
    @include('user_page.layout.category')
    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our
                    Products</span>
                <h3 class="title">SẢN PHẨM</h3>
            </div>
            <div
                class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout">
                    <div class="row row--15">
                        @foreach ($product as $item)
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">

                                <form>
                                    @csrf
                                    <input type="hidden" value="{{ $item->id_product }}"
                                        class="cart_product_id_{{ $item->id_product }}">
                                    <input type="hidden" value="{{ $item->name_product }}"
                                        class="cart_product_name_{{ $item->id_product }}">
                                    <input type="hidden" value="{{ $item->product_img1 }}"
                                        class="cart_product_img1_{{ $item->id_product }}">
                                    <input type="hidden" value="{{ $item->product_img2 }}"
                                        class="cart_product_img2_{{ $item->id_product }}">
                                    <input type="hidden" value="{{ $item->price }}"
                                        class="cart_product_price_{{ $item->id_product }}">
                                    <div class="axil-product product-style-one">
                                        <div class="thumbnail">
                                            <a href="{{URL::to('detail_product/'.$item->id_product)}}">
                                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                    loading="lazy" class="main-img" src="{{ asset($item->product_img1) }}"
                                                    alt="Product Images" height="310px">
                                                <img class="hover-img" src="{{ asset($item->product_img2) }}"
                                                    alt="Product Images" height="310px">
                                            </a>
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    {{-- <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#xemnhanh"><i class="far fa-eye"></i></a>
                                                </li> --}}
                                                
                                                    <li class="select-option">
                                                        <a href="{{URL::to('detail_product/'.$item->id_product)}}">
                                                            Add to Cart
                                                        </a>
                                                    </li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">(64)</span>
                                                </div>
                                                <h5 class="title"><a href="single-product.html"
                                                        id="name_product">{{ $item->name_product }}</a>
                                                </h5>
                                                <div class="product-price-variant">
                                                    <span class="price current-price"
                                                        id="price">{{ number_format($item['price'], 0, ',', '.') }}
                                                        VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                        <!-- End Single Product  -->
                    </div>
                    <div class="data_Tables_paginate paging_simple_numbers mt-5">
                        {{ $product->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <!-- End .slick-single-layout -->
            </div>
        </div>
    </div>

    @include('user_page.layout.feedback')
    @include('user_page.layout.newproducts')
    @include('user_page.layout.show_detail')

    <!-- Start Axil Product Poster Area  -->
    <div class="axil-poster">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb--30">
                    <div class="single-poster">
                        <a href="shop.html">
                            <img src="{{ URL::to('../public/frontend/assets/images/product/poster/poster-01.png') }}"
                                alt="eTrade promotion poster">
                            <div class="poster-content">
                                <div class="inner">
                                    <h3 class="title">Rich sound, <br> for less.</h3>
                                    <span class="sub-title">Collections <i class="fal fa-long-arrow-right"></i></span>
                                </div>
                            </div>
                            <!-- End .poster-content -->
                        </a>
                    </div>
                    <!-- End .single-poster -->
                </div>
                <div class="col-lg-6 mb--30">
                    <div class="single-poster">
                        <a href="shop-sidebar.html">
                            <img src="{{ URL::to('../public/frontend/assets/images/product/poster/poster-02.png') }}"
                                alt="eTrade promotion poster">
                            <div class="poster-content content-left">
                                <div class="inner">
                                    <span class="sub-title">50% Offer In Winter</span>
                                    <h3 class="title">Get VR <br> Reality Glass</h3>
                                </div>
                            </div>
                            <!-- End .poster-content -->
                        </a>
                    </div>
                    <!-- End .single-poster -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Axil Product Poster Area  -->
    <!-- Start Axil Newsletter Area  -->
    <div class="axil-newsletter-area axil-section-gap pt--0">
        <div class="container">
            <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                <div class="newsletter-content">
                    <span class="title-highlighter highlighter-primary2"><i
                            class="fas fa-envelope-open"></i>Newsletter</span>
                    <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                    <div class="input-group newsletter-form">
                        <div class="position-relative newsletter-inner mb--15">
                            <input placeholder="example@gmail.com" type="text">
                        </div>
                        <button type="submit" class="axil-btn mb--15">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End Axil Newsletter Area  -->
    <div class="service-area" style="margin-top: 30px;">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src=" {{ URL::to('../public/frontend/assets/images/icons/service1.png') }}"
                                alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Giao hàng nhanh chóng</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ URL::to('../public/frontend/assets/images/icons/service2.png') }}"
                                alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Bảo hành trong 10 ngày</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ URL::to('../public/frontend/assets/images/icons/service3.png') }}"
                                alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Hàng chính hãng</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ URL::to('../public/frontend/assets/images/icons/service4.png') }}"
                                alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Hỗ trợ 24/7</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
