@extends('layouts.AdminLTE.index')

@section('title')

@endsection



@section('css')


@endsection



@section('content')
    <div class="app-content content">
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
                                    <h4 class="card-title">{{$Mail->type}}</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{route('mail.update',$Mail->id)}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="objet">Objet :</label>
                                                    <input type="text" id="objet" class="form-control" value='{{$Mail->objet}}' name="objet" />
                                                    @if($errors->has('objet'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('objet') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="mb-1">
                                                <label class="form-label" for="contenu">Contenu :</label>
                                                <textarea class="form-control" id="contenu" name="contenu" style="height: 100px;">{{$Mail->contenu}}</textarea>
                                                @if($errors->has('contenu'))
                                                    <div class="demo-spacing-0">
                                                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                            <div class="alert-body d-flex align-items-center">
                                                                <i data-feather="info" class="me-50"></i>
                                                                <span>{{ $errors->first('contenu') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Modifier</button>
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
@endsection



@section('js')


@endsection