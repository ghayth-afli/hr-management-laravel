@extends('interface_visit.base')

@section('title')
    <title>Postuler | {{$offre->poste}}</title>
@endsection



@section('css')
    <link href="{{asset("assets/css/styles.css")}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani" rel="stylesheet">
@endsection


@section('content')
	@include('interface_visit.layouts.header',['offre' => $offre])
    <section class="bg-light py-5">
				<div class="container">
					<div class="row">
						
						<div class="">
						
							<div class="bg-white rounded px-3 py-4 mb-4">
								<div class="jbd-01 d-flex align-items-center justify-content-between">
									<div class="jbd-flex d-flex align-items-center justify-content-start">
										<div class="jbd-01-thumb">
											<img src="{{asset("assets/img/logobleu.png")}}" class="img-fluid" width="90" alt="" />
										</div>
										<div class="jbd-01-caption pl-3">
											<div class="tbd-title"><h4 class="mb-0 ft-medium fs-md">{{$offre->poste}}</h4></div>
											<div class="jbl_location mb-3"><span><i class="lni lni-map-marker mr-1"></i>{{$offre->lieu}}</span><span class="medium ft-medium text-warning ml-3">{{$offre->type}}</span></div>
											<div class="jbl_info01">
												<span class="px-2 py-1 ft-medium medium rounded theme-cl theme-bg-light mr-2">{{$offre->created_at}}</span>										
											</div>
										</div>
									</div>
									<div class="jbd-01-right text-right hide-1023">
										<div class="jbl_button mb-2"><a href="{{route('offre.candidature',$offre->id)}}" class="btn rounded theme-bg-light theme-cl fs-sm ft-medium">Postuler</a></div>
										<div class="jbl_button"><a href="https://amagroup.tn" class="btn rounded bg-white border fs-sm ft-medium">Voir l'entreprise</a></div>
									</div>
								</div>
							</div>
							


							<div class="bg-white rounded mb-4">

								<div class="jbd-details mb-4 jbd-01 px-3 py-4">
									<div class="other-details">
										<div class="details ft-medium"><label class="text-muted">Postes vacants:</label><span class="text-dark">{{$offre->nbr_poste}} postes ouverts</span></div>
										<div class="details ft-medium"><label class="text-muted">Experience :</label><span class="text-dark">minimum {{$offre->experience}} ans d'expérience</span></div>
										<div class="details ft-medium"><label class="text-muted">Niveau d'étude :</label><span class="text-dark">{{$offre->niveau_etude}}</span></div>
										<div class="details ft-medium"><label class="text-muted">Langue :</label><span class="text-dark">{{$offre->langue}}</span></div>
										<div class="details ft-medium"><label class="text-muted">Genre :</label><span class="text-dark">{{$offre->genre}}</span></div>
									</div>
								</div>

								<div class="jbd-01 px-3 py-4">
									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Description de l'emploi :</h5>
										<p>{{$offre->description}}</p>
									</div>
									
									<div class="jbd-details mb-3">
										<h5 class="ft-medium">Exigences de l'emploi :</h5>
										<div class="position-relative row">
											<div class="col-lg-12 col-md-12 col-12">
												<p>{{$offre->exigences}}</p>
											</div>
										</div>
									</div>
									
									
									
									<div class="jbd-details mb-1">
										<h5 class="ft-medium fs-md">Date d'expiration</h5>
										<ul class="p-0 skills_tag text-left">
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">{{$offre->date_expiration}}</span></li>
										</ul>
									</div>
									
								</div>
								
								<div class="jbd-02 px-3 py-3 br-top">
									<div class="jbd-02-flex d-flex align-items-center justify-content-between">
										<div class="jbd-02-social">
											<ul class="jbd-social">
												<li><i class="ti-sharethis"></i></li>
												<li><a href="https://www.facebook.com/amagroup.tn"><i class="ti-facebook"></i></a></li>
												<li><a href="https://www.linkedin.com/company/amagroup-qualityfirst-safetybefore"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
										<div class="jbd-02-aply">
											<div class="jbl_button mb-2">
												<a href="{{route('offre.candidature',$offre->id)}}" class="btn btn-md rounded theme-bg text-light fs-sm ft-medium">Postuler</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
			</section>

@endsection



@section('js')
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
	<script src="{{asset("assets/js/popper.min.js")}}"></script>
	<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("assets/js/slick.js")}}"></script>
	<script src="{{asset("assets/js/slider-bg.js")}}"></script>
	<script src="{{asset("assets/js/smoothproducts.js")}}"></script>
	<script src="{{asset("assets/js/snackbar.min.js")}}"></script>
	<script src="{{asset("assets/js/jQuery.style.switcher.js")}}"></script>
	<script src="{{asset("assets/js/custom.js")}}"></script>
@endsection