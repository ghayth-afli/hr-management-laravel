<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Forgot Password</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/vendors/css/vendors.min.css")}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/bootstrap-extended.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/colors.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/components.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/themes/dark-layout.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/themes/bordered-layout.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/themes/semi-dark-layout.min.css")}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/core/menu/menu-types/vertical-menu.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/plugins/forms/form-validation.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/pages/authentication.css")}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css")}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- Forgot Password basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="" class="brand-logo">
                                    <img class="img-fluid" src="{{ asset("app-assets\images\logo\ama.png")}}" alt="Login V2"/>
                                </a>
                                <h4 class="card-title mb-1">Mot de passe oublié? 🔒</h4>
                                <p class="card-text mb-2">Entrez votre email et nous vous enverrons un nouveau mot de passe.</p>

                                <form class="auth-forgot-password-form mt-2" action="{{ route('sendPassword') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="mb-1">
                                        <label for="forgot-password-email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="forgot-password-email" name="email" placeholder="john@example.com" aria-describedby="forgot-password-email" tabindex="1" autofocus />
                                        @if(session()->has('error'))
                                            <div class="demo-spacing-0">
                                                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                    <div class="alert-body d-flex align-items-center">
                                                        <i data-feather="info" class="me-50"></i>
                                                        <span>{{ session()->get('error') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="2">Envoyer</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="/login"> <i data-feather="chevron-left"></i> Retour à la page de connexion </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Forgot Password basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


   <!-- BEGIN: Vendor JS-->
   <script src="{{ asset("app-assets/vendors/js/vendors.min.js")}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset("app-assets/vendors/js/forms/validation/jquery.validate.min.js")}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset("app-assets/js/core/app-menu.min.js")}}"></script>
    <script src="{{ asset("app-assets/js/core/app.min.js")}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset("app-assets/js/scripts/pages/auth-login.js")}}"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
</body>
<!-- END: Body-->

</html>