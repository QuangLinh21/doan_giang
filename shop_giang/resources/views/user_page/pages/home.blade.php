@extends('welcome')
@section('content')
@include('user_page.layout.category')
<div class="axil-product-area bg-color-white axil-section-gap">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our Products</span>
            <h3 class="title">SẢN PHẨM</h3>
        </div>
        <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
            <div class="slick-single-layout">
                <div class="row row--15">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img" src="{{URL::to('../public/frontend/assets/images/product/electric/product-01.png')}}" alt="Product Images">
                                    <img class="hover-img" src="{{URL::to('../public/frontend/assets/images/product/electric/product-08.png')}}" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option">
                                            <a href="single-product.html">
                                                Add to Cart
                                            </a>
                                        </li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
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
                                    <h5 class="title"><a href="single-product.html">Yantiti Leather & Canvas Bags</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="800" loading="lazy" src="assets/images/product/electric/product-02.png" alt="Product Images">
                                    <img class="hover-img" src="assets/images/product/electric/product-06.png" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">Level 20 RGB Cherry</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="800" loading="lazy" src="assets/images/product/electric/product-03.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% Off</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">Logitech Streamcam</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="800" loading="lazy" src="assets/images/product/electric/product-03.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% Off</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">Logitech Streamcam</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                </div>
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="row row--15">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-01.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% Off</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">Yantiti Leather & Canvas Bags</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-02.png" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-03.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% Off</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-04.png" alt="Product Images">
                                </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-05.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% Off</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-06.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% Off</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-07.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% Off</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-08.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% Off</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="single-product.html">Select Option</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  -->

                </div>
            </div>
            <!-- End .slick-single-layout -->
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt--20 mt_sm--0">
                <a href="shop.html" class="axil-btn btn-bg-lighter btn-load-more">View All Products</a>
            </div>
        </div>

    </div>
</div>
@endsection