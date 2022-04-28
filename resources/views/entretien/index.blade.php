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
                <!-- Bordered table start -->
                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Entretiens</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">

                                    <thead>
                                        <tr>
                                            <th>Designation</th>
                                            <th>Date</th>
                                            <th>Horaire</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($entretiens as $entretien)
                                            @if($entretien->date < Carbon\Carbon::now())
                                                <tr>
                                                    <td>
                                                        <i data-feather='check-circle'></i>
                                                        <span class="fw-bold">&emsp;{{$entretien->designation}}</span>
                                                    </td>
                                                    <td>{{$entretien->date}}</td>
                                                    <td><span class="badge rounded-pill badge-light-primary me-1">{{$entretien->time}}</span></td>
                                                    <td>
                                                        <a href ="{{route('entretien.edit',$entretien->id)}}"><i data-feather="edit-2" class="me-50"></i></a>
                                                        <a href ="{{route('entretien.destroy',$entretien->id)}}"><i data-feather="delete" class="me-50"></i></a>
                                                        <a href ="{{route('entretien.show',$entretien->id)}}"><i data-feather="eye" class="me-50"></i></a>

                                                    </td>
                                                </tr>
                                            @endif

                                            @if($entretien->date >= Carbon\Carbon::now())
                                                <tr>
                                                    <td>
                                                        <i data-feather='circle'></i>
                                                        <span class="fw-bold">&emsp;{{$entretien->designation}}</span>
                                                    </td>
                                                    <td>{{$entretien->date}}</td>
                                                    <td><span class="badge rounded-pill badge-light-primary me-1">{{$entretien->time}}</span></td>
                                                    <td>
                                                        <a href ="{{route('entretien.edit',$entretien->id)}}"><i data-feather="edit-2" class="me-50"></i></a>
                                                        <a href ="{{route('entretien.destroy',$entretien->id)}}"><i data-feather="delete" class="me-50"></i></a>
                                                        <a href ="{{route('entretien.show',$entretien->id)}}"><i data-feather="eye" class="me-50"></i></a>

                                                    </td>
                                                </tr>
                                            @endif

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bordered table end -->
            </div>
        </div>
    </div>

@endsection



@section('js')


@endsection