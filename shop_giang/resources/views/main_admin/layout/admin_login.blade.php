<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-20/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 15:27:23 GMT -->

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('../public/login/css/style.css')}}">
</head>

<body class="img js-fullheight" style="background-image: url('../public/login/images/bg.jpg')">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Admin Login !</h3>
                        @if (session()->has('message'))
                        <div class="alert alert-danger">
                            {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{URL::to('/admin_login')}}" method="post" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="admin_email" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="password" type="password" class="form-control" placeholder="Password"
                                    required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>
</html>