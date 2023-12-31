@extends('layout_account')
@section('content')
<div class="axil-signin-area">

    <!-- Start Header -->
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-sm-4">
                <a href="index.html" class="site-logo"><img src="assets/images/logo/logo.png" alt="logo"></a>
            </div>
            <div class="col-sm-8">
                <div class="singin-header-btn">
                    <p>Not a member?</p>
                    <a href="{{URL::to('register')}}" class="axil-btn btn-bg-secondary sign-up-btn">Đăng ký tài khoản</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--9">
                <h3 class="title">We Offer the Best Products</h3>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">Đăng nhập</h3>
                    <p class="b2 mb--55">Enter your detail below</p>
                    @if (session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                        </div>
                    @endif
                    <form class="singin-form" method="POST" action="{{URL::to('login_user')}}">
                        @csrf
                        <div class="form-group">
                            <label>Tài khoản</label>
                            <input type="email" class="form-control" name="username" placeholder="annie@example.com">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="123456789">
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between">
                            <button type="submit" class="axil-btn btn-bg-primary submit-btn">Sign In</button>
                            <a href="forgot-password.html" class="forgot-btn">Forget password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection