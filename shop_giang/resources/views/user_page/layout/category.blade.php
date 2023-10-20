<div class="axil-categorie-area bg-color-white axil-section-gapcommon">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i> Categories</span>
            <h3 class="title">DANH MỤC</h3>
        </div>
        <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
            @foreach ($category_list as $item)
            <div class="slick-single-layout">
               
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                    <a href="{{URL::to('category_main/'.$item->id_category)}}">
                        <img class="img-fluid" src="{{$item->img}}" alt="product categorie">
                        <h6 class="cat-title">{{$item->name_category}}</h6>
                    </a>
                </div>
              
                <!-- End .categrie-product -->
            </div>
            @endforeach
        </div>
    </div>
</div>