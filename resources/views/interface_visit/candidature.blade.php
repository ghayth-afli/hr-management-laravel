@extends('interface_visit.base')

@section('title')
    <title>{{$offre->poste}}</title>
@endsection



@section('css')
    <link href="{{asset("assets/css/styles.css")}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani" rel="stylesheet">
@endsection


@section('content')
			@include('interface_visit.layouts.header',['offre' => $offre])
			<section class="bg-light py-5">
				<div class="container">
                    <div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Postuler votre candidature</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Carrière</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">{{$offre->poste}}</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Postuler</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>

					<div class="dashboard-widg-bar d-block">
						<form action="{{ route('recrutement.postuler') }}" method="post" enctype="multipart/form-data">
                            @csrf
							<input type="text" value="{{$offre->id}}" name="recrutement_id" hidden>
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="_dashboard_content bg-white rounded mb-4">
										<div class="_dashboard_content_header br-bottom py-3 px-3">
											<div class="_dashboard__header_flex">
												<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Créer un CV</h4>	
											</div>
										</div>
											<div class="_dashboard_content_body py-3 px-3">
												<div class="row">
													<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
														<div class="custom-file avater_uploads">
															<input type="file" class="custom-file-input" id="customFile" name="photo" required>
															<label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
														</div>
														@if($errors->has('photo'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('photo') }}</span>
																	</div>
																</div>
															</div>
                                                    	@endif
													</div>
													<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
														<div class="row">
															<div class="col-xl-6 col-lg-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Votre nom</label>
																	<input type="text" class="form-control rounded" placeholder="Votre nom" name="nom" required>
																</div>
																@if($errors->has('nom'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('nom') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-xl-6 col-lg-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Titre professionnel</label>
																	<input type="text" class="form-control rounded" placeholder="Ex : Web Designer" name="titre_pro" required>
																</div>
																@if($errors->has('titre_pro'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('titre_pro') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-xl-6 col-lg-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Email</label>
																	<input type="email" class="form-control rounded"  placeholder="Ex@ex.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="ce champ doit obligatoirement être rempli en respectant le format" required>
																</div>
																@if($errors->has('email'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('email') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-xl-6 col-lg-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Tel</label>
																	<input type="tel" class="form-control rounded"  placeholder="+216 33 333 333" name="tel" required>
																</div>
																@if($errors->has('tel'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('tel') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-xl-12 col-lg-12">
																<div class="form-group">
																	<label class="text-dark ft-medium">Linkedin</label>
																	<input type="text" class="form-control rounded" name="linkedin" required>
																</div>
																@if($errors->has('linkedin'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('linkedin') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-xl-12 col-lg-12">
																<div class="form-group">
																	<label class="text-dark ft-medium">Adresse</label>
																	<input type="text" class="form-control rounded"  placeholder="Ex : Ariana,Tunisie" name="adresse" required>
																</div>
																@if($errors->has('adresse'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('adresse') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-xl-12 col-lg-12">
																<div class="form-group">
																	<label class="text-dark ft-medium">Sexe</label>
																	<select class="form-control rounded" id="basicSelect" name="sexe">
																		<option value='Homme'>Homme</option>
																		<option value='Femme'>Femme</option>
																	</select>																
																</div>
																@if($errors->has('sexe'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('sexe') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-xl-12 col-lg-12">
																<div class="form-group">
																	<label class="text-dark ft-medium">Langue(s)</label>
																	<input type="text" class="form-control rounded"  placeholder="Ex : Fr" name="langue" required>
																</div>
																@if($errors->has('langue'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('langue') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-xl-12 col-lg-12">
																<div class="form-group">
																	<label class="text-dark ft-medium">Présentez-vous</label>
																	<textarea class="form-control with-light" placeholder="Présentez-vous" name="profil" required></textarea>
																</div>
																@if($errors->has('profil'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('profil') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>
							</div>
							
							<!-- Formation -->
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
												<div class="col-xl-12 col-lg-12 fvrduplicate2">
													<div class="gray rounded p-3 mb-3 position-relative entry2">
														<button type="button" class="aps-clone btn-remove2"><i class="fas fa-times"></i></button>
														<div class="form-group">
															<label class="text-dark ft-medium">Ecole</label>
															<input type="text" class="form-control rounded" placeholder="Ecole" name="ecole[]" required>
														</div>
														@if($errors->has('ecole.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('ecole.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="form-group">
															<label class="text-dark ft-medium">Domaine</label>
															<input type="text" class="form-control rounded" placeholder="Domaine" name="domaine[]" required>
														</div>
														@if($errors->has('domaine.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('domaine.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="form-group">
															<label class="text-dark ft-medium">Diplome</label>
															<input type="text" class="form-control rounded" placeholder="Diplome" name="diplome[]" required>
														</div>
														@if($errors->has('diplome.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('diplome.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="form-row">
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Date de début</label>
																	<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy" name="date_deb[]" required>
																</div>
																@if($errors->has('date_deb.*'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('date_deb.*') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Date de fin</label>
																	<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy" name="date_fin[]" required>
																</div>
																@if($errors->has('date_fin.*'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('date_fin.*') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
														</div>
														<div class="col-xl-12 col-lg-12">
															<div class="form-group">
																<button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add2"><i class="fas fa-plus mr-1"></i>Ajouter une formation</button>
															</div>
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>	
							</div>	
							
							<!-- Expérience -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="_dashboard_content bg-white rounded mb-4">
										<div class="_dashboard_content_header br-bottom py-3 px-3">
											<div class="_dashboard__header_flex">
												<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Expérience</h4>	
											</div>
										</div>
										
										<div class="_dashboard_content_body py-3 px-3">
												<div class="col-xl-12 col-lg-12 fvrduplicate1">
													<div class="gray rounded p-3 mb-3 position-relative entry1">
														<button type="button" class="aps-clone btn-remove1"><i class="fas fa-times"></i></button>
														<div class="form-group">
															<label class="text-dark ft-medium">Titre</label>
															<input type="text" class="form-control rounded" placeholder="Titre" name="titre[]" required>
														</div>
														@if($errors->has('titre.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('titre.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="form-group">
															<label class="text-dark ft-medium">Entreprise</label>
															<input type="text" class="form-control rounded" placeholder="Entreprise" name="entreprise[]" required>
														</div>
														@if($errors->has('entreprise.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('entreprise.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="form-group">
															<label class="text-dark ft-medium">Emplacement</label>
															<input type="text" class="form-control rounded" placeholder="Ex : Tunis,Tunisie" name="emplacement[]" required>
														</div>
														@if($errors->has('emplacement.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('emplacement.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="form-row">
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Date de début</label>
																	<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy" name="date_debExp[]" required>
																</div>
																@if($errors->has('date_debExp.*'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('date_debExp.*') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Date de fin</label>
																	<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy" name="date_finExp[]" required>
																</div>
																@if($errors->has('date_finExp.*'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('date_finExp.*') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
														</div>
														<div class="col-xl-12 col-lg-12">
															<div class="form-group">
																<button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add1"><i class="fas fa-plus mr-1"></i>Ajouter une expérience</button>
															</div>
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>	
							</div>
							<!-- Projet -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="_dashboard_content bg-white rounded mb-4">
										<div class="_dashboard_content_header br-bottom py-3 px-3">
											<div class="_dashboard__header_flex">
												<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Projet (Optionnel)
												</h4>	
											</div>
										</div>
										
										<div class="_dashboard_content_body py-3 px-3">
												<div class="col-xl-12 col-lg-12 fvrduplicate3">
													<div class="gray rounded p-3 mb-3 position-relative entry3">
														<button type="button" class="aps-clone btn-remove3"><i class="fas fa-times"></i></button>
														<div class="form-group">
															<label class="text-dark ft-medium">Titre</label>
															<input type="text" class="form-control rounded" placeholder="Ecole" name="titreProjet[]" required>
														</div>
														@if($errors->has('titreProjet.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('titreProjet.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														
														<div class="form-row">
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Date</label>
																	<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy" name="dateProjet[]" required>
																</div>
																@if($errors->has('dateProjet.*'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('dateProjet.*') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
															
														</div>
														<div class="form-group">
															<label class="text-dark ft-medium">Description</label>
															<textarea class="form-control ht-80" placeholder="Tâches effectuées" name="description[]" required></textarea>
														</div>
														@if($errors->has('description.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('description.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="col-xl-12 col-lg-12">
															<div class="form-group">
																<button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add3"><i class="fas fa-plus mr-1"></i>Ajouter une projet</button>
															</div>
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>	
							</div>	
							<!-- Certification -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="_dashboard_content bg-white rounded mb-4">
										<div class="_dashboard_content_header br-bottom py-3 px-3">
											<div class="_dashboard__header_flex">
												<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Certification (Optionnel)</h4>	
											</div>
										</div>
										
										<div class="_dashboard_content_body py-3 px-3">
												<div class="col-xl-12 col-lg-12 fvrduplicate1">
													<div class="gray rounded p-3 mb-3 position-relative entry1">
														<button type="button" class="aps-clone btn-remove1"><i class="fas fa-times"></i></button>
														<div class="form-group">
															<label class="text-dark ft-medium">Nom</label>
															<input type="text" class="form-control rounded" placeholder="Nom" name="nomCert[]" required>
														</div>
														@if($errors->has('nomCert.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('nomCert.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="form-group">
															<label class="text-dark ft-medium">Organisme émetteur</label>
															<input type="text" class="form-control rounded" placeholder="Organisme émetteur" name="organisme[]" required>
														</div>
														@if($errors->has('organisme.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('organisme.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="form-row">
															<div class="col-6">
																<div class="form-group">
																	<label class="text-dark ft-medium">Date d'émission</label>
																	<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy" name="date[]" required>
																</div>
																@if($errors->has('date.*'))
																	<div class="demo-spacing-0">
																		<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																			<div class="alert-body d-flex align-items-center">
																				<i data-feather="info" class="me-50"></i>
																				<span>{{ $errors->first('date.*') }}</span>
																			</div>
																		</div>
																	</div>
																@endif
															</div>
														</div>
														
														<div class="col-xl-12 col-lg-12">
															<div class="form-group">
																<button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add1"><i class="fas fa-plus mr-1"></i>Ajouter une certification</button>
															</div>
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>	
							</div>
							<!-- Compétences -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="_dashboard_content bg-white rounded mb-4">
										<div class="_dashboard_content_header br-bottom py-3 px-3">
											<div class="_dashboard__header_flex">
												<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Compétences</h4>	
											</div>
										</div>
										
										<div class="_dashboard_content_body py-3 px-3 repeater-default">
												<div class="col-xl-12 col-lg-12 fvrduplicate">
													<div class="gray rounded p-3 mb-3 position-relative entry">
														<button class="aps-clone btn-remove" type="button"><i class="fas fa-times"></i></button>
														<div class="form-group">
															<label class="text-dark ft-medium">Nom de compétence</label>
															<input type="text" class="form-control rounded" placeholder="Nom de compétence" name="competence[]" required>
														</div>
														@if($errors->has('competence.*'))
															<div class="demo-spacing-0">
																<div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
																	<div class="alert-body d-flex align-items-center">
																		<i data-feather="info" class="me-50"></i>
																		<span>{{ $errors->first('competence.*') }}</span>
																	</div>
																</div>
															</div>
														@endif
														<div class="col-xl-12 col-lg-12">
															<div class="form-group">
																<button type="button" class="btn gray ft-medium apply-btn fs-sm rounded btn-add"><i class="fas fa-plus mr-1"></i>Ajouter une compétence</button>
															</div>
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>	
							</div>
							
							<!-- Valider -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Valider</button>
								</div>	
							</div>
                        </form>
					</div>
				</div>
			</section>
@endsection



@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{asset("assets/js/repeater.js")}}"></script>
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