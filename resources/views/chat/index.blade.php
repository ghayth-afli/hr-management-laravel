@extends('layouts.AdminLTE.index')

@section('title')

@endsection



@section('css')

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-chat-list.min.css">
    <!-- END: Page CSS-->

@endsection



@section('content')
<livewire:chat />
@endsection



@section('js')


@endsection