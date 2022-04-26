@extends('layouts.AdminLTE.index')

@section('title')
    <title>Candidats</title>
@endsection



@section('css')
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-sliders.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-ecommerce.min.css">
@endsection



@section('content')
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">-----</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">-----</a></li>
                                    <li class="breadcrumb-item"><a href="#">-----</a></li>
                                    <li class="breadcrumb-item active">-----</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <livewire:candidate-list :id_recrutement="$id_recrutement"/>
        </div>
    </div>
    <script>
        feather.replace()
    </script>
@endsection



@section('js')
    <script src="../../../app-assets/vendors/js/extensions/wNumb.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-ecommerce.min.js"></script>

@endsection