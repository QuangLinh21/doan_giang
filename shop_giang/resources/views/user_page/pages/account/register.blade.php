@extends('layout_account')
@section('content')
<div class="axil-signin-area">

    <!-- Start Header -->
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                {{-- <a href="index.html" class="site-logo"><img src="assets/images/logo/logo.png" alt="logo"></a> --}}
            </div>
            <div class="col-md-6">
                <div class="singin-header-btn">
                    <p>Already a member?</p>
                    <a href="{{URL::to('login_acc')}}" class="axil-btn btn-bg-secondary sign-up-btn">Sign In</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--10">
                <h3 class="title">We Offer the Best Products</h3>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">Đăng ký tài khoản</h3>
                    <p class="b2 mb--55">Enter your detail below</p>
                    <form class="singin-form" method="POST"  action="{{URL::to('create_acc')}}">
                        @csrf
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" value="{{ old('fullname') }}"   name="fullname" placeholder="Nguyễn  Văn A">
                            @error('fullname')
                            <span style="color:red; margin-top:5px;">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{ old('fullname') }}"  name="fullname" placeholder="vana@example.com">
                            @error('username')
                            <span style="color:red; margin-top:5px;">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control"   name="password" placeholder="123456789">
                            @error('password')
                            <span style="color:red; margin-top:5px;">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="axil-btn btn-bg-primary submit-btn">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection