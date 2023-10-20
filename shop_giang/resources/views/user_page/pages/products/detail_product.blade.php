@extends('welcome');
@section('content')
<div class="container">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="single-product-thumb">
                    @foreach ($info_product as $key=>$item)
                    <form action="{{URL::to('/save-cart')}}" method="post">
                        @csrf
                        {{-- <input type="hidden" value="{{$item->id_product}}" class="cart_product_id_{{$item->id_product}}">
                        <input type="hidden" value="{{$item->name_product}}" class="cart_product_name_{{$item->id_product}}">
                        <input type="hidden" value="{{$item->product_img1}}" class="cart_product_image_{{$item->id_product}}">
                        <input type="hidden" value="{{$item->price}}" class="cart_product_price_{{$item->id_product}}">
                        <input type="hidden" value="1" class="cart_product_qty_{{$item->id_product}}"> --}}
                    <div class="row">
                        
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                        <div class="thumbnail">
                                            <img src="{{ asset($item->product_img1) }}" alt="Product Images" id="wishlist_productimages1{{$item->id_product}}">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="{{ asset($item->product_img1) }}" class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset($item->product_img2) }}" alt="Product Images" ">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="{{ asset($item->product_img2) }}" class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb small-thumb-wrapper">
                                        <div class="small-thumb-img">
                                            <img src="{{ asset($item->product_img1) }}" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="{{ asset($item->product_img2) }}" alt="thumb image">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    {{-- <input type="hidden" id="wishlist_productname{{$item->name_product}}" value="{{$item->name_product}}">
                                    <input type="hidden" id="wishlist_productprice{{$item->price}}" value="{{ number_format($item->price, 0, ',', '.') }}VNĐ"> --}}
                                    <h3 class="product-title">{{$item->name_product}}</h3>
                                    <span class="price-amount">{{ number_format($item->price, 0, ',', '.') }}VNĐ</span>
                                  
                                    <p class="description">{{$item->description}}</p>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                    
                                        <!-- End Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Size</h6>
                                            <div class="color-variant-wrapper">
                                               <select name="size" >
                                                @foreach ($option_product as $item)
                                                    <option value="{{$item->id_size}}">{{$item->name_size}}</option>
                                                @endforeach
                                               </select>
                                            </div>
                                        </div>
                                      

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                        <!-- Start Quentity Action  -->
                                        <div class="pro-qty"><input type="text" name="qty" value="1"></div>
                                        <input type="hidden" name="product_id_hidden" value="{{$item->id_product}}">
                                        <!-- End Quentity Action  -->

                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><button class="axil-btn btn-bg-primary" type="submit">Add to Cart</button></li>
                                            {{-- <li><button type="button" class="btn btn-fefault cart add-to-cart" data-id_product="{{$item->id_product}}" name="add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Thêm vào giỏ hàng
                                            </button></li> --}}
                                            <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection