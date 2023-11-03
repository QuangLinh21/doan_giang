@extends('welcome')
@section('content')
<div class="container_new p-5">
    <div class="container container_new_detail p-4">
        <h3>{!!$new->new_title !!}</h3>
        <p>{!!$new->created_at !!}</p>
        <h5>{!!$new->new_des !!}</h5>
        <img src="{{asset($new->new_img)}}" alt="">
        <div>{!!$new->new_content !!}</div>
    </div>
</div>
@endsection
