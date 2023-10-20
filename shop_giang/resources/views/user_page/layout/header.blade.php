<header class="header axil-header header-style-1">
    <div class="axil-header-top">
        <div class="container">
        </div>
    </div>
    <!-- Start Mainmenu Area  -->
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand">
                    <a href="{{ URL::to('/') }}" class="logo logo-dark">
                        <img src="{{ URL::to('../public/frontend/assets/images/logo/logo.png') }}" alt="Site Logo">
                    </a>
                    <a href="{{ URL::to('/') }}" class="logo logo-light">
                        <img src="{{ URL::to('../public/frontend/assets/images/logo/logo-light.png') }}"
                            alt="Site Logo">
                    </a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                        <div class="mobile-nav-brand">
                            <a href="{{ URL::to('/') }}" class="logo">
                                <img src="assets/images/logo/logo.png" alt="Site Logo">
                            </a>
                        </div>
                        <ul class="mainmenu">
                            <li>
                                <a href="{{URL::to('/')}}">Trang chủ</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Sản phẩm</a>
                                <ul class="axil-submenu">
                                    @foreach ($category_list as $item)
                                        <li ><a href="{{URL::to('category_main/'.$item->id_category)}}">{{$item->name_category}}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Thương Hiệu</a>
                                <ul class="axil-submenu">
                                    @foreach ($brand_list as $item)
                                        <li><a href="{{URL::to('brands_main/'.$item->id_brand)}}">{{$item->name_brand}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="contact.html">Tin tức</a></li>
                            <li><a href="contact.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="action-list">
                        <li class="axil-search">
                            <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                <i class="flaticon-magnifying-glass"></i>
                            </a>
                        </li>
                        <li class="wishlist">
                            <a href="wishlist.html">
                                <i class="flaticon-heart"></i>
                            </a>
                        </li>
                        <li class="shopping-cart">

                            <a href="{{URL::to('show-cart')}}" >
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="my-account">
                            <a href="javascript:void(0)">
                                <i class="flaticon-person"></i>
                            </a>
                            <div class="my-account-dropdown">
                                <span class="title">QUICKLINKS</span>
                                <ul>
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li>
                                        <a href="#">Initiate return</a>
                                    </li>
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                    <li>
                                        <a href="#">Language</a>
                                    </li>
                                </ul>
                                <div class="login-btn">
                                    <a href="{{URL::to('login_acc')}}" class="axil-btn btn-bg-primary">Login</a>
                                </div>
                                <div class="reg-footer text-center">No account yet? 
                                    <a href="{{URL::to('register')}}" class="btn-link">REGISTER HERE.</a></div>
                            </div>
                        </li>
                        <li class="axil-mobile-toggle">
                            <button class="menu-btn mobile-nav-toggler">
                                <i class="flaticon-menu-2"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
