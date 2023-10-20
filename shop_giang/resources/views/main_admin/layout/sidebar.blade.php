<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between" style="padding-bottom: 0; margin-bottom:0">
        <a href="index-2.html"><img src="{{ URL::to('../public/backend/img/logo-main.jpg') }}"
                style="width:200px; height:150px;" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li >
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ URL::to('../public/backend/img/menu-icon/4.svg') }}" alt>
                </div>
                <span>Sản phẩm</span>
            </a>
            <ul>
                <li><a href="{{ URL::to('/ad_product') }}">Danh sách</a></li>
                <li><a href="{{ URL::to('/insert-product') }}">Thêm mới</a></li>
            </ul>
        </li>
        <li >
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ URL::to('../public/backend/img/menu-icon/2.svg') }}" alt>
                </div>
                <span>Danh mục</span>
            </a>
            <ul>
                <li><a href="{{ URL::to('/ad_category') }}">Danh sách</a></li>
                <li><a href="{{ URL::to('/insert-category') }}">Thêm mới</a></li>
            </ul>
        </li>
        <li >
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src=" {{ URL::to('../public/backend/img/menu-icon/3.svg') }}" alt>
                </div>
                <span>Thương hiệu</span>
            </a>
            <ul>
                <li><a href="{{ URL::to('/admin_brand') }}">Danh sách</a></li>
                <li><a href="{{ URL::to('/insert-brand') }}">Thêm mới</a></li>
            </ul>
        </li>
        <li >
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src=" {{ URL::to('../public/backend/img/menu-icon/3.svg') }}" alt>
                </div>
                <span>Màu sắc</span>
            </a>
            <ul>
                <li><a href="{{ URL::to('/admin_color') }}">Danh sách</a></li>
                <li><a href="{{ URL::to('/insert-color') }}">Thêm mới</a></li>
            </ul>
        </li>
        <li >
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src=" {{ URL::to('../public/backend/img/menu-icon/3.svg') }}" alt>
                </div>
                <span>Kích cỡ</span>
            </a>
            <ul>
                <li><a href="{{ URL::to('/admin_size') }}">Danh sách</a></li>
                <li><a href="{{ URL::to('/insert-size') }}">Thêm mới</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="img/menu-icon/4.svg" alt>
                </div>
                <span>forms</span>
            </a>
            <ul>
                <li><a href="Basic_Elements.html">Basic Elements</a></li>
                <li><a href="Groups.html">Groups</a></li>
                <li><a href="Max_Length.html">Max Length</a></li>
                <li><a href="Layouts.html">Layouts</a></li>
            </ul>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="img/menu-icon/5.svg" alt>
                </div>
                <span>Icons</span>
            </a>
            <ul>
                <li><a href="Fontawesome_Icon.html">Fontawesome Icon</a></li>
                <li><a href="themefy_icon.html">themefy icon</a></li>
            </ul>
        </li>
    </ul>
</nav>
