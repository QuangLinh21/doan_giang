@extends('welcome')
@section('content')
    <div class="axil-contact-page-area axil-section-gap">
        <div class="container">
            <div class="axil-contact-page">
                <div class="row row--30 pt-4">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3 class="title mb--10">Liên hệ với chùng tôi</h3>
                            <p>Nếu có bất kỳ câu hỏi nào hãy liên hệ ngay với chúng tôi</p>

                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @elseif(session()->has('error'))
                                <div class="alert alert-dannger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            {{-- <form action="{{URL::to('send_contact')}}"  method="POST"   class="axil-contact-form">
                                {{ csrf_field() }}
                                <div class="row row--10">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Họ và tên <span>*</span></label>
                                            <input type="text" name="name" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Phone <span>*</span></label>
                                            <input type="text" name="phone"  >
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-message">Your Message</label>
                                            <textarea name="message"  cols="1" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb--0">
                                            <input type="submit" class="axil-btn btn-bg-primary" value="Gửi liên hệ">
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                            <form action="{{URL::to('send_contact')}}" method="post">
                                {{ csrf_field() }}
                               <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name">Họ và tên <span>*</span></label>
                                        <input type="text" name="name" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-phone">Phone <span>*</span></label>
                                        <input type="text" name="phone"  >
                                    </div>
                                </div>
                               </div>
                               
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact-message">Your Message</label>
                                        <textarea name="message"  cols="1" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb--0">
                                        <input type="submit" class="axil-btn btn-bg-primary" value="Gửi liên hệ">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-location mb--40">
                            <h4 class="title mb--20">Cửa hàng của chúng tôi</h4>
                            <span class="address mb--20">Ngõ Chùa Hưng Ký - Minh Khai - Hai Bài Trưng Hà Nội</span>
                            <span class="phone">Điện thoại: 099999999</span>
                            <span class="email">Email: truonggiang@gmail.com</span>
                        </div>
                        <div class="contact-career mb--40">
                            <h4 class="title mb--20">Careers</h4>
                            <p>Instead of buying six things, one that you really like.</p>
                        </div>
                        <div class="opening-hour">
                            <h4 class="title mb--20">Opening Hours:</h4>
                            <p>Monday to Saturday: 9am - 10pm
                                <br> Sundays: 10am - 6pm
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Google Map Area  -->
            <div class="axil-google-map-wrap axil-section-gap pb--0">
                <div class="mapouter mt-5">
                    <div class="gmap_canvas">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9556061544595!2d105.85145437365206!3d20.99441658896035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac12bfe0d817%3A0x33a7152bf93376b2!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBQaMawxqFuZyDEkMO0bmc!5e0!3m2!1svi!2s!4v1699008285165!5m2!1svi!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- End Google Map Area  -->
        </div>
    </div>
@endsection
