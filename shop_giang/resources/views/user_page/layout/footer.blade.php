<footer class="axil-footer-area footer-style-2">
    <!-- Start Footer Top Area  -->
    <div class="footer-top separator-top">
        <div class="container">
            <div class="row">
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Thông tin liên hệ</h5>
                        <!-- <div class="logo mb--30">
                        <a href="index.html">
                            <img class="light-logo" src="assets/images/logo/logo.png" alt="Logo Images">
                        </a>
                    </div> -->
                        <div class="inner">
                            <p>Ngõ chùa Hưng Ký, Minh Khai Quận Hai Bà Trưng, Hà Nội
                            </p>
                            <ul class="support-list-item">
                                <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i>truonggiang@gmail.com</a></li>
                                <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i>0999999999</a></li>
                                <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-2 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Về chúng tôi</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{ URL::to('/') }}">Trang chủ</a></li>
                                <li><a href="{{ URL::to('/') }}">Sản phẩm</a></li>
                                <li><a href="{{ URL::to('/') }}">Thương hiệu</a></li>
                                <li><a href="{{URL::to('tin-tuc')}}">Tin tức</a></li>
                                <li><a href="{{URL::to('contact_us')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-2 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Thương hiệu nổi bật</h5>
                        <div class="inner">
                            <ul>
                                
                                @foreach ($brand_list as $item)
                                <li><a
                                        href="{{ URL::to('brands_main/' . $item->id_brand) }}">{{ $item->name_brand }}</a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-5 col-sm-6">
                    <div class="axil-footer-widget">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9556061544595!2d105.85145437365206!3d20.99441658896035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac12bfe0d817%3A0x33a7152bf93376b2!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBQaMawxqFuZyDEkMO0bmc!5e0!3m2!1svi!2s!4v1699008285165!5m2!1svi!2s"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- End Single Widget  -->
            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->
    <!-- Start Copyright Area  -->
  
</footer>