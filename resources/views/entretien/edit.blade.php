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
                                <div class="card-body">
                                    <form class="form" action="{{route('entretien.update',$entretien->id)}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="designation">Designation :</label>
                                                    <input type="text" id="designation" class="form-control" name="designation" value='{{$entretien->designation}}'/>
                                                    @if($errors->has('designation'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('designation') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="date">Date :</label>
                                                    <input type="date" id="date" class="form-control" name="date" value='{{$entretien->date}}'/>
                                                    @if($errors->has('date'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('date') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="time">Horaire :</label>
                                                    <input type="time" id="time" class="form-control" name="time" value='{{$entretien->time}}'/>
                                                    @if($errors->has('time'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('time') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
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