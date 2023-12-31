<div class="axil-shop-sidebar">
    <div class="d-lg-none">
        <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
    </div>
    <div class="toggle-list product-categories active">
        <h6 class="title">Danh mục</h6>
        <div class="shop-submenu">
            <ul>
                @foreach ($category_list as $item)
                <li ><a href="{{URL::to('category_main/'.$item->id_category)}}">{{$item->name_category}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="toggle-list product-categories product-gender active">
        <h6 class="title">Thương hiệu</h6>
        <div class="shop-submenu">
            <ul>
                @foreach ($brand_list as $item)
                 <li><a href="{{URL::to('brands_main/'.$item->id_brand)}}">{{$item->name_brand}}</a></li>
                @endforeach
                
            </ul>
        </div>
    </div>
   
    <button class="axil-btn btn-bg-primary">All Reset</button>
</div>