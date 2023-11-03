@extends('welcome')
@section('content')
<div class="header-top-campaign">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="header-campaign-activation axil-slick-arrow arrow-both-side header-campaign-arrow">
                    <div class="slick-slide">
                        <div class="campaign-content">
                            <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="campaign-content">
                            <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="main-wrapper">

    <!-- Start Checkout Area  -->
    <div class="axil-checkout-area axil-section-gap">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="axil-checkout-billing">
                            <h4 class="title mb--40">Thông tin nhận hàng</h4>
                                    <div class="form-group">
                                        <label>Họ và tên<span>*</span></label>
                                        <input type="text" id="last-name" name="customer_name" placeholder="Nguyễn Trường Giang">
                                    </div>
                            
                            <div class="form-group">
                                 <label>Email<span>*</span></label>
                                <input type="email" name="customer_email" placeholder="Truonggiang@gmail.com">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại<span>*</span></label>
                               <input type="text" name="customer_sdt" placeholder="Truonggiang@gmail.com">
                           </div>
                           <div class="form-group">
                            <label>Địa chỉ</label>
                            <textarea rows="2" name="customer_address"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Ghi chú</label>
                            <textarea rows="2" name="customer_note"></textarea>
                          </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Checkout Area  -->

</main>
@endsection