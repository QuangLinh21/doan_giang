<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 04:50:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Home-01</title>
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
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/vendor/style_new.css')}}">

</head>


<body class="sticky-header newsletter-popup-modal">
    @yield('content');
 
<!-- JS============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('../public/frontend/assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('../public/frontend/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/js.cookie.js')}}"></script>
    <!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/sal.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/counterup.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/vendor/waypoints.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('../public/frontend/assets/js/main.js')}}"></script>

</body>
<script>
    function add_wishlist(id_product){
        var id = id_product;
        var name = document.getElementById('wishlist_productname'+id).value
        console.log(name);
        // var price = document.getElementById('wishlist_productprice'+id).value;
        // var img1 = document.getElementById('wishlist_productimages1'+id).src;
        alert(id);
        alert(name);
        alert(price);
        alert(img1);

    }
</script>

<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 04:50:19 GMT -->
</html>