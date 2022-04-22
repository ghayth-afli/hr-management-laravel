@extends('layouts.AdminLTE.index')

@section('title')
<title>Notifications</title>
@endsection


@section('css')

    


@section('content')

        <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        
        <div class="content-body">
            <livewire:show-notifications />
        </div>
      </div>
    </div>
@endsection


@section('js')

@endsection