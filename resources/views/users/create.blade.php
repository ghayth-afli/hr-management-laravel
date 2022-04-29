@extends('layouts.AdminLTE.index')

@section('title')
    <title>Ajouter |Responsable</title>
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
                                    <h4 class="card-title">Nouveau responsable</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{ route('user.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Nom</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Nom" name="name" />
                                                    @if($errors->has('name'))
                                                        <div class="demo-spacing-0">
                                                                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                    <div class="alert-body d-flex align-items-center">
                                                                        <i data-feather="info" class="me-50"></i>
                                                                        <span>{{ $errors->first('name') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="last-name-column">Email</label>
                                                    <input type="email" name="email" id="last-name-column" class="form-control" placeholder="email" name="lname-column" />
                                                    @if($errors->has('email'))
                                                        <div class="demo-spacing-0">
                                                                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                    <div class="alert-body d-flex align-items-center">
                                                                        <i data-feather="info" class="me-50"></i>
                                                                        <span>{{ $errors->first('email') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="basicSelect">Role</label>
                                                <select class="form-select" id="basicSelect" name="roles[]">
                                                @foreach($roles as $role)
                                                        <option value="{{ $role->id}}"> {{ $role->name}} </option>
                                                @endforeach
                                                </select>
                                                @if($errors->has('roles'))
                                                        <div class="demo-spacing-0">
                                                                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                    <div class="alert-body d-flex align-items-center">
                                                                        <i data-feather="info" class="me-50"></i>
                                                                        <span>{{ $errors->first('roles') }}</span>
                                                                    </div>
                                                                </div>
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