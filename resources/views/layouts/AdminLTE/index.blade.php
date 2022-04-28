<!DOCTYPE html>
<html lang="en">

    <head>
            @yield('title')
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
            <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
            <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
            <meta name="author" content="PIXINVENT">
            <title>Tableau de bord </title>
            <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.html">
            <link rel="shortcut icon" type="image/x-icon" href="https://amagroup.tn/wp-content/uploads/2021/10/logobleu.png">
            <link href="https://fonts.googleapis.com/css2?family=Rajdhani" rel="stylesheet">

            <!-- BEGIN: Vendor CSS-->
            <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/toastr.min.css">
            <link rel="stylesheet" type="text/css" href="/app-assets/font/font-awesome/css/font-awesome.min.css">
            <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
            <script src="https://unpkg.com/feather-icons"></script>


            <!-- END: Vendor CSS-->

            <!-- BEGIN: Theme CSS-->
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.min.css">

            <!-- BEGIN: Page CSS-->
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard-ecommerce.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/charts/chart-apex.min.css">
            <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-toastr.min.css">
            <!-- END: Page CSS-->

            <!-- BEGIN: Custom CSS-->
            <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
            <!-- END: Custom CSS-->

 
            @livewireStyles
            @yield('css')
    </head>

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
            @include('layouts.AdminLTE._includes._menu_superior')
            @include('layouts.AdminLTE._includes._menu_lateral')
            @yield('content')
            
            
            <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
            <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
            <script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
            <script src="../../../app-assets/js/core/app-menu.min.js"></script>
            <script src="../../../app-assets/js/core/app.min.js"></script>
            <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
            
            <script>
                feather.replace()
            </script>







    <!-- END: Page JS-->
            @yield('js')
            @livewireScripts
    </body>

</html>