@extends('layouts.AdminLTE.index')

@section('title')

@endsection



@section('css')


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
                            <h2 class="content-header-title float-start mb-0">Product Details</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                                    <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a></li>
                                    <li class="breadcrumb-item active">Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- app e-commerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset("images/cvPhoto/".$candidat->photo)}}" class="img-fluid card-img-top" alt="product image" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h4>{{$candidat->nom}}</h4>
                                    <span class="card-text item-company"><a class="company-name">{{$candidat->titre_pro}}</a></span>
                                    <p class="card-text">Etat - <span class="text-success">{{$candidat->etat}}</span></p>
                                   
                                    <ul class="product-features list-unstyled">
                                        <li><i data-feather="phone-call"></i> <span>&emsp;{{$candidat->tel}}</span></li>
                                        <li>
                                            <i data-feather="mail"></i>
                                            <span>&emsp;{{$candidat->email}}</span>
                                        </li>
                                    </ul>
                                    <hr />
                                    <form id="my_form" class="form" action="{{route('candidat.inviter')}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_candidat" value="{{$candidat->id}}">
                                             <div class="product-color-options">
                                                <h6>Entretien</h6>
                                                <div class="mb-1">
                                                    <select class="form-select" id="genre" name="id_entretien">
                                                        @foreach($entretiens as $entretien)
                                                            <option value="{{$entretien->id}}">{{$entretien->designation}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('id_entretien'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('id_entretien') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        <hr />
                                        <div class="d-flex flex-column flex-sm-row pt-1">
                                            <a href="javascript:{}" onclick="document.getElementById('my_form').submit();" class="btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0">
                                                <i data-feather="send"></i>
                                                <span class="add-to-cart">Inviter</span>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->

                        
                    </div>
                </section>
                <!-- app e-commerce details end -->
            </div>
        </div>
    </div>
@endsection



@section('js')


@endsection