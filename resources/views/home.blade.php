@extends('layouts.AdminLTE.index')

@section('css')

@endsection



@section('content')
<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <div class="row">
      @if (Auth::user()->can('show-recrutement', ''))
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-body">
              <div class="avatar bg-light-info p-50 mb-1">
                <div class="avatar-content">
                  <i data-feather="eye" class="font-medium-5"></i>
                </div>
              </div>
              <h2 class="fw-bolder" wire:poll>{{count($recrutements)}}</h2>
              <p class="card-text">Recruitment</p>
            </div>
          </div>
        </div>
      @endif

      <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-center">
          <div class="card-body">
            <div class="avatar bg-light-primary p-50 mb-1">
              <div class="avatar-content">
                <i data-feather="users" class="font-medium-5"></i>
              </div>
            </div>
            <h2 class="fw-bolder" wire:poll>{{count($candidats)}}</h2>
            <p class="card-text">Candidats</p>
          </div>
        </div>
      </div>
      @if (Auth::user()->can('show-entretien', ''))
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-body">
              <div class="avatar bg-light-success p-50 mb-1">
                <div class="avatar-content">
                  <i data-feather="user-check" class="font-medium-5"></i>
                </div>
              </div>
              <h2 class="fw-bolder"  wire:poll>{{count($candidatsAccepté)}}</h2>
              <p class="card-text">Accepté</p>
            </div>
          </div>
        </div>
      @endif
      @if (Auth::user()->can('show-entretien', ''))
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-body">
              <div class="avatar bg-light-danger p-50 mb-1">
                <div class="avatar-content">
                  <i data-feather="slash" class="avatar-icon"></i>
                </div>
              </div>
              <h2 class="fw-bolder" wire:poll>{{count($candidatsRefusé)}}</h2>
              <p class="card-text">Refusé</p>
            </div>
          </div>
        </div>
      @endif
      
      @if (Auth::user()->can('show-user', ''))
          <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
              <div class="card-body">
                <div class="avatar bg-light-info p-50 mb-1">
                  <div class="avatar-content">
                    <i data-feather="user" class="font-medium-5"></i>
                  </div>
                </div>
                <h2 class="fw-bolder" wire:poll>{{count($users)}}</h2>
                <p class="card-text">Responsable</p>
              </div>
            </div>
          </div>
      @endif

      @if (Auth::user()->can('show-entretien', ''))
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-body">
              <div class="avatar bg-light-danger p-50 mb-1">
                <div class="avatar-content">
                  <i data-feather="briefcase" class="avatar-icon"></i>
                </div>
              </div>
              <h2 class="fw-bolder" wire:poll>{{count($entretiens)}}</h2>
              <p class="card-text">Entretien</p>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>

  <div class="row match-height">
    <div class="col-lg-4 col-12">
      <div class="row match-height">
      </div>
    </div>
  </div>
  @if (Auth::user()->can('show-entretien', ''))
    @if(count($entretiens)!=0)
      <div class="row match-height">
        <!-- Company Table Card -->
        <div class="col-lg-8 col-12">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Entretiens</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Designation</th>
                                        <th>Date</th>
                                        <th>Candidats</th>
                                        <th>Horaire</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($entretiens as $entretien) 
                                      @if($entretien->start_date > Carbon\Carbon::now())
                                        <tr>
                                            <td>
                                                <i data-feather='circle'></i>
                                                <span class="fw-bold">&emsp;{{$entretien->title}}</span>
                                            </td>
                                            <td>{{$entretien->start_date}}</td>
                                            <td>
                                                <div class="avatar-group">
                                                  @foreach($entretien->candidats as $candidat)
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="{{$candidat->nom}}">
                                                        <img src="{{ asset("images/cvPhoto/".$candidat->photo)}}" alt="Avatar" height="26" width="26" />
                                                    </div>
                                                  @endforeach
                                                </div>
                                            </td>
                                            <td><span class="badge rounded-pill badge-light-primary me-1">{{$entretien->time}}</span></td>
                                            <td>
                                                <a href="{{route('entretien.edit',$entretien->id)}}"><i data-feather="edit-2" class="me-50"></i></a>
                                                <a href="{{route('entretien.destroy',$entretien->id)}}"><i data-feather="delete" class="me-50"></i></a>
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
        </div>
        <!--/ Company Table Card -->
        <!-- Developer Meetup Card -->
        @foreach($entres as $entre)
          <div class="col-lg-4 col-md-6 col-12">
              <div class="card card-developer-meetup">
                  <div class="meetup-img-wrapper rounded-top text-center">
                      <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170" />
                  </div>
                  <div class="card-body">
                      <div class="meetup-header d-flex align-items-center">
                          <div class="meetup-day">
                              <h6 class="mb-0">{{Carbon\Carbon::parse($entre->start_date)->translatedFormat('D')}}</h6>
                              <h3 class="mb-0">{{Carbon\Carbon::parse($entre->start_date)->translatedFormat('d')}}</h3>
                          </div>
                          <div class="my-auto">
                              <h4 class="card-title mb-25">{{$entre->title}}</h4>
                          </div>
                      </div>
                      <div class="mt-0">
                          <div class="avatar float-start bg-light-primary rounded me-1">
                              <div class="avatar-content">
                                  <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                              </div>
                          </div>
                          <div class="more-info">
                              <h6 class="mb-0">
                                  {{Carbon\Carbon::parse($entre->start_date)->translatedFormat('D')}} {{Carbon\Carbon::parse($entre->start_date)->translatedFormat('d')}} {{Carbon\Carbon::parse($entre->start_date)->translatedFormat('M')}}
                                  {{Carbon\Carbon::parse($entre->start_date)->Format('y')}}
                              </h6>
                              <small>{{$entre->time}}</small>
                          </div>
                      </div>

                      <div class="avatar-group">
                        @foreach($entre->candidats->take(6) as $candidat)
                          <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="{{$candidat->nom}}" class="avatar pull-up">
                              <img src="{{ asset("images/cvPhoto/".$candidat->photo)}}" alt="Avatar" width="33" height="33" />
                          </div>
                        @endforeach
                          @if(count($candidats) > 6)
                            <a href="{{route('entretien.show',$entretien->id)}}"><h6 class="align-self-center cursor-pointer ms-50 mb-0">+{{count($candidats)-6}}</h6></a>
                          @endif
                      </div>
                  </div>
              </div>
          </div>
        @endforeach
        <!--/ Developer Meetup Card -->
      </div>
    @endif
  @endif
</section>
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
@endsection



@section('js')

@endsection