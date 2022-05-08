<div>
    <div class="content-detached content-right">
        <div class="content-body">
            <!-- E-commerce Content Section Starts -->
            <section id="ecommerce-header" wire:ignore>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ecommerce-header-items">
                            <div class="result-toggler">
                                <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
                                    <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
                                </button>
                                <div class="search-results">{{count($Candidats)}} résultats trouvés</div>
                            </div>
                            <div class="view-options d-flex">
                                <div class="btn-group" role="group">
                                    <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked />
                                    <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn" for="radio_option1"><i data-feather="grid" class="font-medium-3"></i></label>
                                    <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" />
                                    <label class="btn btn-icon btn-outline-primary view-btn list-view-btn" for="radio_option2"><i data-feather="list" class="font-medium-3"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- E-commerce Content Section Starts -->

            <!-- background Overlay when sidebar is shown  starts-->
            <div class="body-content-overlay"></div>
            <!-- background Overlay when sidebar is shown  ends-->

            <!-- E-commerce Search Bar Starts -->
            <section id="ecommerce-searchbar" class="ecommerce-searchbar" wire:ignore>
                <div class="row mt-1">
                    <div class="col-sm-12">
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control search-product" id="shop-search" placeholder="Rechercher" aria-label="Search..." aria-describedby="shop-search" wire:model.debounce.1ms="Search"/>
                            <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- E-commerce Search Bar Ends -->

            <!-- E-commerce Products Starts -->
            <section id="ecommerce-products" class="grid-view">
                @foreach($Candidats as $Candidat)
                    <div class="card ecommerce-card">
                        <div class="item-img text-center">
                            <a href="{{ route('candidat.show', $Candidat->id) }}" target="_blank">
                                <img class="img-fluid card-img-top" src='{{ asset("images/cvPhoto/".$Candidat->photo)}}' alt="img-placeholder"/>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-wrapper">
                                <div>
                                    <h6 class="item-price"><span class="badge bg-secondary">#Experiences : {{$Candidat->nb_experience}} ans</span></h6>
                                    <h6 class="item-name">
                                        <a class="text-body" href="{{ route('candidat.show', $Candidat->id) }}" target="_blank">{{$Candidat->nom}}</a>
                                        <span class="card-text item-company"><a class="company-name">{{$Candidat->titre_pro}}</a></span>
                                    </h6>
                                </div>
                            </div>

                            <p class="card-text item-description">
                                The Apple iPhone 11 is a great smartphone, which was loaded with a lot of quality features. It comes with a waterproof and dustproof body which is the key attraction of the device. The excellent set of cameras offer
                                excellent images as well as capable of recording crisp videos. However, expandable storage and a fingerprint scanner would have made it a perfect option to go for around this price range.
                            </p>
                        </div>
                        <div class="item-options text-center" >
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price"><span>Experiences :</span> 4 ans</h4>
                                </div>
                            </div>
                            @if($Candidat->selected == 0)
                                <a class="btn btn-light btn-wishlist" wire:click=select({{$Candidat->id}})>
                                    <!--<i data-feather="plus"></i>-->
                                    <span>Présélection</span>
                                </a>
                            @else
                                <a class="btn btn-light btn-wishlist" wire:click=select({{$Candidat->id}})>
                                    <!--<i data-feather="plus"></i>-->
                                    <span>Annuler</span>
                                </a>
                            @endif
                            <a class="btn btn-primary btn-cart">
                                <i data-feather="send"></i>
                                <span class="add-to-cart">Inviter</span>
                            </a>
                            @if($Candidat->etat == 'En cours de traitement')
                                <a class="btn btn-primary1 btn-cart"  wire:click=refuse({{$Candidat->id}})>
                                    <i data-feather="x"></i>
                                    <span class="add-to-cart">Refuser</span>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </section>
            <!-- E-commerce Products Ends -->

            <!-- E-commerce Pagination Starts -->
            <section id="ecommerce-pagination">
                <div class="row">
                    <div class="col-sm-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mt-2">
                                @if(count($Candidats)/6 >= 2)
                                    @for ($x = 0; $x <= count($Candidats)/6; $x++) {
                                        <li class="page-item"><a class="page-link" href="#">$x</a></li>
                                    @endfor
                                @endif
                            </ul>   
                        </nav>
                    </div>
                </div>
            </section>
            <!-- E-commerce Pagination Ends -->
        </div>
    </div>
    <div class="sidebar-detached sidebar-left">
        <div class="sidebar">
            <!-- Ecommerce Sidebar Starts -->
            <div class="sidebar-shop">
                <div class="row">
                    <div class="col-sm-12">
                        <h6 class="filter-heading d-none d-lg-block">Filtres</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- Formation Filter starts -->
                        <div class="multi-range-price">
                            <ul class="list-unstyled categories-list">
                                <li>
                                    <div class="form-check">
                                    <input type="radio" id="category1"  value=1 name="Selected" class="form-check-input" wire:model="Selected">
                                    <label class="form-check-label" for="category1">Sélectionnés </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                    <input type="radio" id="category2" value=0 name="Selected" class="form-check-input" wire:model="Selected">
                                    <label class="form-check-label" for="category2" checked="">Non sélectionnés </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Formation Filter starts -->

                        <!-- Formation Filter starts -->
                        <div class="multi-range-price">
                            <h6 class="filter-title mt-0">Ecole:</h6>
                            <ul class="list-unstyled price-range" id="price-range">
                                <select class="form-select" id="basicSelect"  wire:model="Ecole">
                                    <option value="">Tout</option>
                                    @foreach($ecoles as $ecole)
                                        <option value="{{$ecole->ecole}}">{{$ecole->ecole}}</option>
                                    @endforeach
                                </select>
                            </ul>
                        </div>
                        <!-- Formation Filter ends -->

                        <!-- Etat Starts -->
                        <div id="product-categories">
                            <h6 class="filter-title">Section de formation :</h6>
                            <ul class="list-unstyled categories-list">
                                <select class="form-select" id="basicSelect"  wire:model="Section">
                                    <option value="">Tout</option>
                                    @foreach($sections as $section)
                                        <option value="{{$section->section}}">{{$section->section}}</option>
                                    @endforeach
                                </select>
                            </ul>
                        </div>
                        <!-- Etat Ends -->
                         

                        <!-- Etat Starts -->
                        <div id="product-categories">
                            <h6 class="filter-title">Etat :</h6>
                            <ul class="list-unstyled categories-list">
                                <select class="form-select" id="basicSelect"  wire:model="Etat">
                                    <option value="">Tout</option>
                                    @foreach($etats as $etat)
                                        <option value="{{$etat->adresse}}">{{$etat->adresse}}</option>
                                    @endforeach
                                </select>
                            </ul>
                        </div>
                        <!-- Etat Ends -->
                        
                        <!-- Expérience Starts -->
                        <div id="product-categories">
                            <h6 class="filter-title">Expérience :</h6>
                            <ul class="list-unstyled categories-list">
                                <select class="form-select" id="basicSelect"  wire:model="SortBy">
                                    <option value="asc">Ordre croissant</option>
                                    <option value="desc">Ordre décroissant</option>
                                </select>
                            </ul>
                        </div>
                        <!-- Expérience Ends -->

                        <!-- Sexe starts -->
                        <div class="brands">
                            <h6 class="filter-title">Sexe :</h6>
                            <ul class="list-unstyled brand-list">
                                <select class="form-select" id="basicSelect"  wire:model="Sexe">
                                    <option value="">Indifférent</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </ul>
                        </div>
                        <!-- Sexe ends -->

                        <!-- Clear Filters Starts -->
                        <div id="clear-filters">
                            <button type="button" class="btn w-100 btn-primary">Réinitialiser</button>
                        </div>
                        <!-- Clear Filters Ends -->
                    </div>
                </div>
            </div>
            <!-- Ecommerce Sidebar Ends -->
        </div>
    </div>
</div>
