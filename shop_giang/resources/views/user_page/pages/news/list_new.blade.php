@extends('welcome')
@section('content')
<div class="container_news">
    <h3 class="text-center mt-5">TIN TỨC</h3>
    <div class="container">
        <div class="container_list_new">
            @foreach ($news as $item)
            <div class="new_item shadow-sm bg-body rounded rbt-feature">
                <img src="{{asset($item->new_img)}}" alt="">
                <div class="box_content">
                    <div class="box_new_content mt-3">
                        <h5>{{$item->new_title}}</h5>
                    </div>
                    <div>
                        <span>{{$item->created_at}}</span>
                    </div>
                    <div class="box_new_des">
                        <p>
                            {{$item->new_des}}
                        </p>
                    </div>
                    <div class="box_new_xt">
                        <a href="{{URL::to('new_detail/'.$item->new_id)}}">Xem Thêm</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
