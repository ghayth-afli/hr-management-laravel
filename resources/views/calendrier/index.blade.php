@extends('layouts.AdminLTE.index')

@section('title')

@endsection



@section('css')

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/calendars/fullcalendar.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
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
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-calendar.min.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
        <!-- END: Page CSS-->
    
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
        <!-- END: Custom CSS-->
@endsection



@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row"></div>
            <div class="content-body">
                <!-- Full calendar start -->
                <section>
                    <div class="app-calendar overflow-hidden border">
                        <div class="row g-0">
                            <!-- Sidebar -->

                            <!-- /Sidebar -->

                            <!-- Calendar -->
                            <div class="col position-relative">
                                <div class="card shadow-none border-0 mb-0 rounded-0">
                                    <div class="card-body pb-0">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Calendar -->
                            <div class="body-content-overlay"></div>
                        </div>
                    </div>
                </section>
                <!-- Full calendar end -->
            </div>
        </div>
    </div>
@endsection



@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-calendar-events.min.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-calendar.min.js"></script>
    <!-- END: Page JS-->

@endsection