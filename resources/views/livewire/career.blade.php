<div>
    <section class="bg-light">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="bg-white rounded">							
							
								<div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
									<h4 class="ft-medium fs-lg mb-0">Filter</h4>
								</div>
								
								<!-- Find New Property -->
								<div class="sidebar-widgets collapse miz_show" id="search_open" data-parent="#search_open">
									
									<div class="search-inner">
										
										<div class="filter-search-box px-4 pt-3 pb-0">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Mots-clés" wire:model.debounce.1ms="Search">
											</div>
										</div>
										
										<div class="filter_wraps">
											
											<!-- Type d'emploi Search -->
											<div class="single_search_boxed px-4 pt-0 br-bottom">
												<div class="widget-boxed-header">
													<h4>
														<a href="#Type" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Type d'emploi</a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse show" id="Type" data-parent="#Type">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body p-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li>
																			<input id="Freelance" class="radio-custom" type="radio" name="Type" value="Freelance" wire:model="Type">
																			<label for="Freelance" class="radio-custom-label">Freelance</label>
																		</li>
																		<li>
																			<input id="Mi-temps" class="radio-custom" type="radio" name="Type" value="Mi-temps" wire:model="Type">
																			<label for="Mi-temps" class="radio-custom-label">Mi-temps</label>
																		</li>
																		<li>
																			<input id="Temps plein" class="radio-custom"  type="radio" name="Type" value="Temps plein" wire:model="Type">
																			<label for="Temps plein" class="radio-custom-label">Temps plein</label>
																		</li>
                                                                        <li>
																			<input id="Stage" class="radio-custom"  type="radio" name="Type" value="Stage" wire:model="Type">
																			<label for="Stage" class="radio-custom-label">Stage</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Job Skills Search -->
											<div class="single_search_boxed px-4 pt-0 br-bottom">
												<div class="widget-boxed-header">
													<h4>
														<a href="#lieu" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Lieu</a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse show" id="lieu" data-parent="#lieu">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body p-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li>
                                                                            <input id="Tunis" class="radio-custom" type="radio" name="Lieu" value="Tunis" wire:model="Lieu">
																			<label for="Tunis" class="radio-custom-label">Tunis</label>
																		</li>
																		<li>
                                                                            <input id="Burundi" class="radio-custom" type="radio" name="Lieu" value="Burundi" wire:model="Lieu">
																			<label for="Burundi" class="radio-custom-label">Burundi</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Experience Search -->
											<div class="single_search_boxed px-4 pt-0 br-bottom">
												<div class="widget-boxed-header">
													<h4>
														<a href="#departement" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Département</a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse show" id="departement" data-parent="#departement">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body p-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
                                                                        @foreach($departements as $departement)
                                                                            <li>
                                                                                <input id="{{$departement->id}}" class="radio-custom" type="radio" name="departement" value="{{$departement->id}}" wire:model="Departement">
																			    <label for="{{$departement->id}}" class="radio-custom-label">{{$departement->nom}}</label>
                                                                            </li>
                                                                        @endforeach
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div>
										
										<!-- <div class="form-group filter_button pt-2 pb-4 px-4">
											<button type="submit" class="btn btn-md theme-bg text-light rounded full-width">22 Results Show</button>
										</div>-->
									</div>							
								</div>
							</div>
							<!-- Sidebar End -->
						
						</div>
						
						<!-- Item Wrap Start -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-12">
									<div class="row align-items-center justify-content-between mx-0 bg-white rounded py-2 mb-4">
										<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
											<h6 class="mb-0 ft-medium fs-sm">{{ count($recrutements)}} emplois trouvés</h6>
										</div>
										
										<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
											<div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
												<div class="single_fitres mr-2 br-right">
													<select class="custom-select simple" wire:model="SortBy">
													  <option value="asc" selected="">Ordre croissant</option>
													  <option value="desc">Ordre décroissant</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<!-- All jobs -->
							<div class="row" >
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<!-- Single job -->
                                    @foreach($recrutements as $recrutement)
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="jbr-wrap text-left border rounded">
                                            <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
                                                <div class="cats-box rounded bg-white d-flex align-items-center">
                                                    <div class="text-center"><img src="assets1/img/logobleu.png" class="img-fluid" width="55" alt=""></div>
                                                    <div class="cats-box-caption px-2">
                                                        <h4 class="fs-md mb-0 ft-medium">{{$recrutement->poste}}</h4>
                                                        <div class="d-block mb-2 position-relative">
                                                            <span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i>Burundi</span>
                                                            <span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i>{{$recrutement->type}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center mlb-last"><a href="job-detail.html" class="btn gray ft-medium apply-btn fs-sm rounded">Voir<i class="lni lni-arrow-right-circle ml-1"></i></a></div>
                                            </div>
                                        </div>
                                        </div>
                                    @endforeach
								</div>
							</div>
							
						<!--	<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<ul class="pagination">
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Previous">
											<span class="fas fa-arrow-circle-right"></span>
											<span class="sr-only">Previous</span>
										  </a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item active"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">18</a></li>
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Next">
											<span class="fas fa-arrow-circle-right"></span>
											<span class="sr-only">Next</span>
										  </a>
										</li>
									</ul>
								</div>
							</div>
							
						
                        
                        </div>
                                        -->
					</div>
				</div>
				
			</section>
</div>
