<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 04:50:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Store</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/base.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/style_new.css')}}">
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<body class="sticky-header newsletter-popup-modal">

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>

    @include('user_page.layout.header')

    <main class="main-wrapper">
       {{-- ----------------------banner------------ --}}
        <div >
            @yield('content');
        </div>

    </main>


    
    <!-- Start Footer Area  -->
    @include('user_page.layout.footer')
    <!-- End Footer Area  -->

   
    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('../public/frontend/assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    
    <!-- Bootstrap JS -->
    <script src="{{asset('../public/frontend/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/js.cookie.js')}}"></script>
     <script src="{{asset('../public/frontend/assets/js/vendor/jquery.style.switcher.js')}}"></script> 
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/sal.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/counterup.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/main.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/sweetalert.js')}}"></script>
    <script>
        // Lấy thẻ select bằng id
        const selectElement = document.getElementById('input_filter');
        // Thêm sự kiện thay đổi giá trị vào thẻ select
        selectElement.addEventListener('change', function() {
            // Tự động gửi biểu mẫu khi có sự thay đổi
            this.form.submit(); // 'this' là thẻ select
        });
    </script>
</body>


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 04:50:19 GMT -->
</html>