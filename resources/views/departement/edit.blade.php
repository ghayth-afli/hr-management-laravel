@extends('layouts.AdminLTE.index')

@section('title')
    <title>Modifier | {{$departement->nom}}</title>
@endsection



@section('css')


@endsection



@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Modifier</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('departement')}}">Departement</a></li>
                                    <li class="breadcrumb-item"><a href="">{{$departement->nom}}</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('departement.edit',$departement->id)}}">Modifier</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">


                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modifier departement</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{ route('departement.update',$departement->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Nom de departement :</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Departement" name="nom" value="{{$departement->nom}}"/>
                                                    @if($errors->has('nom'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('nom') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                @if($departement->etat_recrutement =="Ouvert")
                                                    <div class="mb-1">
                                                        <label class="form-label" for="basicSelect">Etat de recruitment :</label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="etat_recrutement" id="Ouvert" value="Ouvert" checked="">
                                                            <label class="form-check-label" for="Ouvert">Ouvert</label>
                                                            
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="etat_recrutement" id="Fermé" value="Fermé" >
                                                            <label class="form-check-label" for="Fermé">Fermé</label>
                                                        </div>
                                                        @if($errors->has('etat_recrutements'))
                                                            <div class="demo-spacing-0">
                                                                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                    <div class="alert-body d-flex align-items-center">
                                                                        <i data-feather="info" class="me-50"></i>
                                                                        <span>{{ $errors->first('etat_recrutements') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @else
                                                    <div class="mb-1">
                                                        <label class="form-label" for="basicSelect">Etat de recruitment :</label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="etat_recrutement" id="Ouvert" value="Ouvert" >
                                                            <label class="form-check-label" for="Ouvert">Ouvert</label>
                                                            
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="etat_recrutement" id="Fermé" value="Fermé" checked="">
                                                            <label class="form-check-label" for="Fermé">Fermé</label>
                                                        </div>
                                                        @if($errors->has('etat_recrutements'))
                                                            <div class="demo-spacing-0">
                                                                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                    <div class="alert-body d-flex align-items-center">
                                                                        <i data-feather="info" class="me-50"></i>
                                                                        <span>{{ $errors->first('etat_recrutements') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Ajouter</button>
                                                <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->  

@endsection



@section('js')


@endsection