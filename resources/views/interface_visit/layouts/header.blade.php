<div class="header header-light dark-text">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="{{asset("assets/img/ama.png")}}" class="logo" alt="" width=110 height=59 />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
								<li>

									<a href="{{route('offre.candidature',$offre->first()->id)}}" data-toggle="modal" data-target="#login" class="crs_yuo12 w-auto text-white theme-bg">
										<span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>CANDIDATURE SPONTANÉE</span>
									</a>
									
								</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li><a href="https://amagroup.tn">ACCUEIL</a>
								</li>
								
								<li><a href="javascript:void(0);">A PROPOS</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="https://amagroup.tn/a-propos/">A Propos</a></li>
										<li><a href="https://amagroup.tn/25-ans-dhistoire/">25 ans d’histoire</a></li>
										<li><a href="https://amagroup.tn/defi-3-en-1/">Défi 3 en 1</a></li>
										<li><a href="https://amagroup.tn/certificats/">Certificats</a></li>
										<li><a href="https://amagroup.tn/rd/">R&D</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">ACTIVITÉS</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="https://amagroup.tn/construction/">Construction</a></li>
										<li><a href="https://amagroup.tn/ingenierie-et-management-de-projets/">Ingénierie et Management de Projets</a></li>
										<li><a href="https://www.fmii.pro/">Facility Management</a></li>
										<li><a href="https://amagroup.tn/bim/">BIM</a></li>
									</ul>
								</li>
								
								
								<li><a href="https://amagroup.tn/projets/">PROJETS</a>
								</li>

								<li><a href="https://amagroup.tn/actualites/">ACTUALITÉS</a>

								</li>

								<li><a href="{{route('career')}}">CARRIÈRE</a>

								</li>

								<li><a href="https://amagroup.tn/contact/">CONTACT</a>

								</li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								<li class="add-listing">
									<a href="{{route('offre.candidature',$offre->first()->id)}}" >
										<i class="lni lni-circle-plus mr-1"></i>CANDIDATURE SPONTANÉE
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>