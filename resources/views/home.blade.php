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
      <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-center">
          <div class="card-body">
            <div class="avatar bg-light-success p-50 mb-1">
              <div class="avatar-content">
                <i data-feather="user-check" class="font-medium-5"></i>
              </div>
            </div>
            <h2 class="fw-bolder"  wire:poll>689</h2>
            <p class="card-text">Accepté</p>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-center">
          <div class="card-body">
            <div class="avatar bg-light-danger p-50 mb-1">
              <div class="avatar-content">
                <i data-feather="slash" class="avatar-icon"></i>

              </div>
            </div>
            <h2 class="fw-bolder" wire:poll>2.1k</h2>
            <p class="card-text">Refusé</p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row match-height">
    <div class="col-lg-4 col-12">
      <div class="row match-height">
      </div>
    </div>
  </div>

  <div class="row match-height">
    <!-- Company Table Card -->
    <div class="col-lg-8 col-12">
    <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Basic</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Client</th>
                                            <th>Users</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Angular Project</span>
                                            </td>
                                            <td>Peter Charls</td>
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
                                            <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
              <h6 class="mb-0">THU</h6>
              <h3 class="mb-0">24</h3>
            </div>
            <div class="my-auto">
              <h4 class="card-title mb-25">Entretien</h4>
            </div>
          </div>
          <div class="mt-0">
            <div class="avatar float-start bg-light-primary rounded me-1">
              <div class="avatar-content">
                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="more-info">
              <h6 class="mb-0">Sat, May 25, 2020</h6>
              <small>10:AM to 6:PM</small>
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
</section>
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
@endsection



@section('js')

@endsection