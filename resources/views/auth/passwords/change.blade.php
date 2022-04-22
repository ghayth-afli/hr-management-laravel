<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  
<head>
    <title>Réinitialiser le mot de passe</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <link rel="apple-touch-icon" href="{{ asset("app-assets/images/ico/apple-icon-120.html")}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://amagroup.tn/wp-content/uploads/2021/10/logobleu.png">
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
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
          <!-- Login basic -->
          <div class="card mb-0">
            <div class="card-body">
                <!--<a href="" class="brand-logo">
                    <img class="img-fluid" src="{{ asset("app-assets\images\logo\ama.png")}}" alt="Login V2"/>
                </a>-->
              <h4 class="card-title mb-1">Saisissez un nouveau mot de passe !</h4>

              <form class="auth-login-form mt-2" method="POST" action="{{ route('changePassword.change') }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="mb-1">
                  <label for="login-password" class="form-label">Nouveau mot de passe</label>
                  <div class="input-group input-group-merge form-password-toggle">
                    <input
                      type="password"
                      class="form-control form-control-merge"
                      id="login-password"
                      name="password"
                      tabindex="2"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="login-password"
                    />
                    @if ($errors->has('password'))
                            <span id="login-email-error" class="error">{{ $errors->first('password') }}</span>
                        @endif
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                  </div>
                </div>
                <div class="mb-1">
                  <label for="password-confirm" class="form-label">Confirmez le mot de passe</label>
                  <div class="input-group input-group-merge form-password-toggle">
                    <input
                      type="password"
                      class="form-control form-control-merge"
                      id="password-confirm"
                      name="password_confirmation"
                      tabindex="2"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="login-password"
                    />
                    @if ($errors->has('password_confirmation'))
                            <span id="login-email-error" class="error">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                  </div>
                </div>
                
                <button class="btn btn-primary w-100" tabindex="4">Réinitialiser </button>
              </form>
            </div>
          </div>
          <!-- /Login basic -->
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