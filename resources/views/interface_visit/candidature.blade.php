@extends('interface_visit.base')

@section('title')
    <title>{{$offre->poste}}</title>
@endsection



@section('css')
    <link href="{{asset("assets1/css/styles.css")}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani" rel="stylesheet">
@endsection



@section('content')
<section class="bg-light py-5">
				<div class="container">
                    <div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Postuler votre candidature</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Carrière</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Responsable département fluides</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Postuler</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Créer un CV</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row">
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
												<div class="custom-file avater_uploads">
												  <input type="file" class="custom-file-input" id="customFile">
												  <label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
												</div>
											</div>
											
											<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
												<div class="row">
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Votre nom</label>
															<input type="text" class="form-control rounded" placeholder="Votre nom">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Titre professionnel</label>
															<input type="text" class="form-control rounded" placeholder="Ex : Web Designer">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Email</label>
															<input type="email" class="form-control rounded"  placeholder="Ex@ex.com">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Tel</label>
															<input type="text" class="form-control rounded"  placeholder="+216 33 333 333">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Linkedin</label>
															<input type="text" class="form-control rounded" >
														</div>
													</div>
                                                    <div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Adresse</label>
															<input type="text" class="form-control rounded"  placeholder="Ex : Ariana,Tunisie">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Présentez-vous</label>
															<textarea class="form-control with-light" placeholder="Présentez-vous"></textarea>
														</div>
													</div>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Add Education -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Formation
                                            </h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row">
											<div class="col-xl-12 col-lg-12 fvrduplicate2">
												<div class="gray rounded p-3 mb-3 position-relative entry2">
													<button type="button" class="aps-clone btn-remove2"><i class="fas fa-times"></i></button>
													<div class="form-group">
														<label class="text-dark ft-medium">Ecole</label>
														<input type="text" class="form-control rounded" placeholder="Ecole">
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Domaine</label>
														<input type="text" class="form-control rounded" placeholder="Domaine">
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Diplome</label>
														<input type="text" class="form-control rounded" placeholder="Diplome">
													</div>
													<div class="form-row">
														<div class="col-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Date de début</label>
																<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy">
															</div>
														</div>
														<div class="col-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Date de fin</label>
																<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy">
															</div>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add2"><i class="fas fa-plus mr-1"></i>Ajouter une formation</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>	
						</div>	
						
						<!-- Add Experience -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Expérience</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row">
											<div class="col-xl-12 col-lg-12 fvrduplicate1">
												<div class="gray rounded p-3 mb-3 position-relative entry1">
													<button type="button" class="aps-clone btn-remove1"><i class="fas fa-times"></i></button>
													<div class="form-group">
														<label class="text-dark ft-medium">Titre</label>
														<input type="text" class="form-control rounded" placeholder="Titre">
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Entreprise</label>
														<input type="text" class="form-control rounded" placeholder="Entreprise">
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Emplacement</label>
														<input type="text" class="form-control rounded" placeholder="Ex : Tunis,Tunisie">
													</div>
													<div class="form-row">
														<div class="col-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Date de début</label>
																<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy">
															</div>
														</div>
														<div class="col-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Date de fin</label>
																<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Tâches effectuées</label>
														<textarea class="form-control ht-80" placeholder="Tâches effectuées"></textarea>
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add1"><i class="fas fa-plus mr-1"></i>Ajouter une expérience</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>	
						</div>
						<!-- Add Experience -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Certification</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row">
											<div class="col-xl-12 col-lg-12 fvrduplicate1">
												<div class="gray rounded p-3 mb-3 position-relative entry1">
													<button type="button" class="aps-clone btn-remove1"><i class="fas fa-times"></i></button>
													<div class="form-group">
														<label class="text-dark ft-medium">Nom</label>
														<input type="text" class="form-control rounded" placeholder="Nom">
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Organisme émetteur</label>
														<input type="text" class="form-control rounded" placeholder="Organisme émetteur">
													</div>
													
													<div class="form-row">
														<div class="col-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Date d'émission</label>
																<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy">
															</div>
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add1"><i class="fas fa-plus mr-1"></i>Ajouter une certification</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>	
						</div>
						
						<!-- Add Skills -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Compétences</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3 repeater-default">
										<form class="row">
											<div class="col-xl-12 col-lg-12 fvrduplicate">
												<div class="gray rounded p-3 mb-3 position-relative entry">
													<button class="aps-clone btn-remove" type="button"><i class="fas fa-times"></i></button>
													<div class="form-group">
														<label class="text-dark ft-medium">Nom de compétence</label>
														<input type="text" class="form-control rounded" placeholder="Nom de compétence">
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add"><i class="fas fa-plus mr-1"></i>Ajouter une compétence</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>	
						</div>
						
						<!-- Add Skills -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Valider</button>
							</div>	
						</div>
	
					</div>
				</div>
			</section>
@endsection



@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{asset("assets1/js/repeater.js")}}"></script>
    <script src="{{asset("assets1/js/jquery.min.js")}}"></script>
	<script src="{{asset("assets1/js/popper.min.js")}}"></script>
	<script src="{{asset("assets1/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("assets1/js/slick.js")}}"></script>
	<script src="{{asset("assets1/js/slider-bg.js")}}"></script>
	<script src="{{asset("assets1/js/smoothproducts.js")}}"></script>
	<script src="{{asset("assets1/js/snackbar.min.js")}}"></script>
	<script src="{{asset("assets1/js/jQuery.style.switcher.js")}}"></script>
	<script src="{{asset("assets1/js/custom.js")}}"></script>
@endsection