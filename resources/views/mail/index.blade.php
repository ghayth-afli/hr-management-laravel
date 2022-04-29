@extends('layouts.AdminLTE.index')

@section('title')
    <title>Courriers</title>
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
                                <h4 class="card-title">Courriers</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Objet du courrier</th>
                                            <th>Destinataires </th>
                                            <th>Rédiger</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Mails as $Mail)

                                            @if($Mail->type == 'En cours de traitement')
                                                <tr>
                                                    <td>
                                                        <i data-feather='rotate-ccw'></i>
                                                        <span class="fw-bold">&emsp;{{$Mail->type}}</span>
                                                    </td>
                                                    <td>{{$Mail->objet}}</td>
                                                    <td><span class="badge rounded-pill badge-light-primary me-1">0</span></td>
                                                    <td>
                                                        <a href ="{{route('mail.edit',$Mail->id)}}"><i data-feather="edit-2" class="me-50"></i></a>
                                                    </td>
                                                </tr>
                                            @endif

                                            @if($Mail->type == 'Invitation d\'entretien')
                                                <tr>
                                                    <td>
                                                        <i data-feather='user-plus'></i>
                                                        <span class="fw-bold">&emsp;{{$Mail->type}}</span>
                                                    </td>
                                                    <td>{{$Mail->objet}}</td>
                                                    <td><span class="badge rounded-pill badge-light-primary me-1">0</span></td>
                                                    <td>
                                                        <a href ="{{route('mail.edit',$Mail->id)}}"><i data-feather="edit-2" class="me-50"></i></a>
                                                    </td>
                                                </tr>
                                            @endif

                                            @if($Mail->type == 'Refus de candidature')
                                                <tr>
                                                    <td>
                                                        <i data-feather='user-x'></i>
                                                        <span class="fw-bold">&emsp;{{$Mail->type}}</span>
                                                    </td>
                                                    <td>{{$Mail->objet}}</td>
                                                    <td><span class="badge rounded-pill badge-light-primary me-1">0</span></td>
                                                    <td>
                                                        <a href ="{{route('mail.edit',$Mail->id)}}"><i data-feather="edit-2" class="me-50"></i></a>
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