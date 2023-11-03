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
                            <a href="{{URL::to('detail_product/'.$item->id_product)}}">
                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500" src="{{asset($item->product_img1)}}" alt="Product Images">
                            </a>
                            <div class="label-block label-right">
                                <div class="product-badget">NEW</div>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <h5 class="title"><a href="{{URL::to('detail_product/'.$item->id_product)}}">{{$item->name_product}}</a></h5>
                                <div class="product-price-variant">
                                    {{-- <span class="price old-price">$40</span> --}}
                                    <span class="price current-price">{{ number_format($item['price'],0,',','.')}} VNĐ</span>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                     
                                        <li class="select-option"><a href="{{URL::to('detail_product/'.$item->id_product)}}">Add to Cart</a></li>
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
