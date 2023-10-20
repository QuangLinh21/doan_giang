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
    <script src="{{asset('../public/frontend/assets/js/vendor/jquery.js')}}"></script>
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

    <!-- Main JS -->
    <script src="{{asset('../public/frontend/assets/js/main.js')}}"></script>
    {{-- <script type="text/javascript">
     $(document).ready(function(){
        $('.xemnhanh').click(function(){
            var id_product = $(this).data('id_product');
            var _token = $('input[name="_token"]').val();
            console.log(id_product);
            $.ajax({
                url:'{{url('/quickview')}}',
                method: 'POST',
                dataType:"JSON",
                data:{id_product:id_product,_token:_token},
                success:function(data){
                    $('#product_quickview_name').html(data.name_product);
                    $('#product_quickview_id').html(data.id_product);
                    $('#product_quickview_img1').html(data.product_img1);
                    $('#product_quickview_img2').html(data.product_img2);
                   var a= $('#product_quickview_price').html(data.price);  
                }
            })
        })
    })
    </script> --}}
    {{-- <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                swal('aa');
		 	})
		 });
	</script> --}}
    

</body>


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 04:50:19 GMT -->
</html>