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
                    <a href="{{ URL::to('/') }}" class="logo logo-dark" style="font-size: 22px;
                    font-weight: bold;
                    font-family: cursive;
                    color:#3577F0">
                        TruongGiang_Store
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
                                <a href="{{ URL::to('/') }}">Trang chủ</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Sản phẩm</a>
                                <ul class="axil-submenu">
                                    @foreach ($category_list as $item)
                                        <li><a
                                                href="{{ URL::to('category_main/' . $item->id_category) }}">{{ $item->name_category }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Thương Hiệu</a>
                                <ul class="axil-submenu">
                                    @foreach ($brand_list as $item)
                                        <li><a
                                                href="{{ URL::to('brands_main/' . $item->id_brand) }}">{{ $item->name_brand }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{URL::to('tin-tuc')}}">Tin tức</a></li>
                            <li><a href="{{URL::to('contact_us')}}">Liên hệ</a></li>
                        </ul>
                    </nav>

                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="action-list">
                        <li class="axil-search">
                            <a href="" class="header-search-icon" title="Search">
                                <i class="flaticon-magnifying-glass"></i>
                            </a>
                        </li>
                        <li class="wishlist">
                            <?php
                            $customer_id = Session::get('id_user');
                            if($customer_id==null){
                                ?>
                            <a href="{{ URL::to('login_acc') }}">
                                <i class="fa-brands fa-cc-amazon-pay"></i>
                            </a>
                            <?php
                            } else {?>
                            <a href="{{ URL::to('payment_show') }}">
                                <i class="fa-brands fa-cc-amazon-pay"></i>
                            </a>
                            <?php
                            }
                            ?>

                        </li>
                        <li class="shopping-cart">
                            <a href="{{ URL::to('show-cart') }}">
                                {{-- <span class="cart-count">3</span> --}}
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="my-account">
                            <a href="javascript:void(0)">
                                <i class="flaticon-person"></i>
                            </a>
                            <div class="my-account-dropdown">
                                <ul>

                                    <li>
                                        <h5 class="text-center">
                                            @php
                                                $full_name = Session::get('full_name');
                                                if ($full_name) {
                                                    echo $full_name;
                                                }
                                            @endphp
                                        </h5>
                                    </li>
                                </ul>
                                <div class="login-btn">
                                    <?php
                                     $full_name = Session::get('id_user');
                                     if($full_name == ''){
                                        ?>
                                    <a href="{{ URL::to('login_acc') }}" class="axil-btn btn-bg-primary">Login</a>
                                    <?php
                                     }
                                     else{  ?>
                                    <a href="{{ URL::to('checkout') }}" class="axil-btn btn-bg-primary">Logout</a>
                                    <?php
                                     }
                                    ?>

                                </div>
                                <div class="reg-footer text-center">No account yet? <a
                                        href="{{ URL::to('/register') }}" class="btn-link">REGISTER HERE.</a></div>
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
    <div class="header-search-modal" id="header-search-modal">
        <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
        <div class="header-search-wrap">
            <div class="card-header">
                <form action="{{ URL::to('search_product') }}" method="GET">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="search" class="form-control" name="keyword" id="prod-search"
                            placeholder="Write Something....">
                        <button type="submit" class="btn-se-he" style="width:55px"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
