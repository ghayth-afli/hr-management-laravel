@extends('layouts.AdminLTE.index')

@section('title')

@endsection



@section('css')


@endsection



@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">


                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nouveau departement</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{ route('departement.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Nom de departement :</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Departement" name="nom" />
                                                    @if($errors->has('nom'))
                                                        <span id="login-email-error" class="error">{{ $errors->first('nom') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
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
                                                        <span id="login-email-error" class="error">{{ $errors->first('etat_recrutements') }}</span>
                                                    @endif
                                                </div>
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