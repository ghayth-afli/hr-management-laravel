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

                                                <tr>
                                                    <td>
                                                        <i data-feather='user-plus'></i>
                                                        <span class="fw-bold">&emsp;{{$entretien->designation}}</span>
                                                    </td>
                                                    <td>{{$entretien->date}}</td>
                                                    <td><span class="badge rounded-pill badge-light-primary me-1">{{$entretien->time}}</span></td>
                                                    <td>
                                                        <a href ="{{route('entretien.edit',$entretien->id)}}"><i data-feather="edit-2" class="me-50"></i></a>
                                                    </td>
                                                </tr>

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