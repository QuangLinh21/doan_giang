<div class="axil-new-arrivals-product-area bg-color-white axil-section-gap pb--0">
    <div class="container">
        <div class="product-area pb--50" >
            <div class="section-title-wrapper" style="padding-top: 20px">
                <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i>This Week’s</span>
                <h2 class="title">SẢN PHẨM MỚI</h2>
            </div>
            <div class="new-arrivals-product-activation slick-layout-wrapper--30 axil-slick-arrow  arrow-top-slide">
                @foreach($new_product as $item)
                <div class="slick-single-layout">
                    <div class="axil-product product-style-two">
                        <span hidden>{{$item->id_product}}<</span>
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500" src="{{asset($item->product_img1)}}" alt="Product Images">
                            </a>
                            <div class="label-block label-right">
                                <div class="product-badget">NEW</div>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
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
                                <h5 class="title"><a href="single-product.html">{{$item->name_product}}</a></h5>
                                <div class="product-price-variant">
                                    {{-- <span class="price old-price">$40</span> --}}
                                    <span class="price current-price">{{ number_format($item['price'],0,',','.')}} VNĐ</span>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><button type="button" wire:click="showDetails({{$item->id_product}})"><i class="far fa-eye"></i></button></li>
                                        <li class="select-option"><a href="single-product.html">Add to Cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
