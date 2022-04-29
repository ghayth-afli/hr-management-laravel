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
      @if (Auth::user()->can('show-user', ''))
          <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
              <div class="card-body">
                <div class="avatar bg-light-info p-50 mb-1">
                  <div class="avatar-content">
                    <i data-feather="eye" class="font-medium-5"></i>
                  </div>
                </div>
                <h2 class="fw-bolder" wire:poll>{{count($users)}}</h2>
                <p class="card-text">Responsable</p>
              </div>
            </div>
          </div>
      @endif

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
      @if (Auth::user()->can('show-entretien', ''))
        <div class="col-xl-2 col-md-4 col-sm-6">
          <div class="card text-center">
            <div class="card-body">
              <div class="avatar bg-light-danger p-50 mb-1">
                <div class="avatar-content">
                  <i data-feather="slash" class="avatar-icon"></i>
                </div>
              </div>
              <h2 class="fw-bolder" wire:poll>{{count($entretien)}}</h2>
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
                                            @if($entretien->date > Carbon\Carbon::now())
                                              <tr>
                                                  <td>
                                                      <i data-feather='check-circle'></i>
                                                      <span class="fw-bold">&emsp;{{$entretien->designation}}</span>
                                                  </td>
                                                  <td>{{$entretien->date}}</td>
                                                  <td>
                                                      <div class="avatar-group">
                                                          <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                              <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                          </div>
                                                          <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                              <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                          </div>
                                                          <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                              <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                          </div>
                                                      </div>
                                                  </td>
                                                  <td><span class="badge rounded-pill badge-light-primary me-1">{{$entretien->time}}</span></td>
                                                  <td>
                                                    <a href ="{{route('entretien.edit',$entretien->id)}}"><i data-feather="edit-2" class="me-50"></i></a>
                                                    <a href ="{{route('entretien.destroy',$entretien->id)}}"><i data-feather="delete" class="me-50"></i></a>
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
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card card-developer-meetup">
          <div class="meetup-img-wrapper rounded-top text-center">
            <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170" />
          </div>
          <div class="card-body">
            <div class="meetup-header d-flex align-items-center">
              <div class="meetup-day">
                <h6 class="mb-0">{{Carbon\Carbon::parse($entretien->date)->translatedFormat('D')}}</h6>
                <h3 class="mb-0">{{Carbon\Carbon::parse($entretien->date)->translatedFormat('d')}}</h3>
              </div>
              <div class="my-auto">
                <h4 class="card-title mb-25">{{$entretien->designation}}</h4>
              </div>
            </div>
            <div class="mt-0">
              <div class="avatar float-start bg-light-primary rounded me-1">
                <div class="avatar-content">
                  <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="more-info">
                <h6 class="mb-0">{{Carbon\Carbon::parse($entretien->date)->translatedFormat('D')}} {{Carbon\Carbon::parse($entretien->date)->translatedFormat('d')}} {{Carbon\Carbon::parse($entretien->date)->translatedFormat('M')}} {{Carbon\Carbon::parse($entretien->date)->Format('y')}}</h6>
                <small>{{$entretien->time}}</small>
              </div>
            </div>

            <div class="avatar-group">
              <div
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="bottom"
                title="Billy Hopkins"
                class="avatar pull-up"
              >
                <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33" />
              </div>
              <div
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="bottom"
                title="Amy Carson"
                class="avatar pull-up"
              >
                <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33" />
              </div>
              <div
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="bottom"
                title="Brandon Miles"
                class="avatar pull-up"
              >
                <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33" />
              </div>
              <div
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="bottom"
                title="Daisy Weber"
                class="avatar pull-up"
              >
                <img
                  src="../../../app-assets/images/portrait/small/avatar-s-20.jpg"
                  alt="Avatar"
                  width="33"
                  height="33"
                />
              </div>
              <div
                data-bs-toggle="tooltip"
                data-popup="tooltip-custom"
                data-bs-placement="bottom"
                title="Jenny Looper"
                class="avatar pull-up"
              >
                <img
                  src="../../../app-assets/images/portrait/small/avatar-s-20.jpg"
                  alt="Avatar"
                  width="33"
                  height="33"
                />
              </div>
              <h6 class="align-self-center cursor-pointer ms-50 mb-0">+42</h6>
            </div>
          </div>
        </div>
      </div>
      <!--/ Developer Meetup Card -->
    </div>
  @endif
</section>
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
@endsection



@section('js')

@endsection