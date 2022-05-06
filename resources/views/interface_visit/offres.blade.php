@extends('interface_visit.base')

@section('title')
    <title>Carriere</title>
@endsection



@section('css')
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani" rel="stylesheet">
@endsection


@section('content')
	@include('interface_visit.layouts.header',['offre' => $offre])
	<livewire:career /> 
@endsection



@section('js')
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/slider-bg.js"></script>
	<script src="assets/js/smoothproducts.js"></script>
	<script src="assets/js/snackbar.min.js"></script>
	<script src="assets/js/jQuery.style.switcher.js"></script>
	<script src="assets/js/custom.js"></script>
@endsection