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
                                <div class="search-results">16285 résultats trouvés</div>
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
                                    <h6 class="item-price"><span class="badge bg-secondary">#Experiences : 4 ans</span></h6>
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
                            <a href="#" class="btn btn-light btn-wishlist">
                                <!--<i data-feather="plus"></i>-->
                                <span>Présélection</span>
                            </a>
                            <a href="#" class="btn btn-primary btn-cart">
                                <i data-feather="send"></i>
                                <span class="add-to-cart">Inviter</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </section>
            <!-- E-commerce Products Ends -->

            <!-- E-commerce Pagination Starts -->
            <section id="ecommerce-pagination">
                <<div class="row">
                    <div class="col-sm-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mt-2">
                                <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item next-item"><a class="page-link" href="#"></a></li>
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
                            <h6 class="filter-title mt-0">Formation :</h6>
                            <ul class="list-unstyled price-range" id="price-range">
                                <select class="form-select" id="basicSelect">
                                    <option>IT</option>
                                    <option>Blade Runner</option>
                                    <option>Thor Ragnarok</option>
                                </select>
                            </ul>
                        </div>
                        <!-- Formation Filter ends -->

                        <!-- Etat Starts -->
                        <div id="product-categories">
                            <h6 class="filter-title">Etat :</h6>
                            <ul class="list-unstyled categories-list">
                                <select class="form-select" id="basicSelect">
                                    <option>IT</option>
                                    <option>Blade Runner</option>
                                    <option>Thor Ragnarok</option>
                                </select>
                            </ul>
                        </div>
                        <!-- Etat Ends -->
                        
                        <!-- Expérience Starts -->
                        <div id="product-categories">
                            <h6 class="filter-title">Expérience :</h6>
                            <ul class="list-unstyled categories-list">
                                <select class="form-select" id="basicSelect">
                                    <option>Ordre croissant</option>
                                    <option>Ordre décroissant</option>
                                </select>
                            </ul>
                        </div>
                        <!-- Expérience Ends -->

                        <!-- Age starts -->
                        <div class="brands">
                            <h6 class="filter-title">Age :</h6>
                            <ul class="list-unstyled brand-list">
                                <li>
                                    <div class="form-check">
                                        <input type="radio" id="priceAll" name="price-range" class="form-check-input" checked />
                                        <label class="form-check-label" for="priceAll">All</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="radio" id="priceRange1" name="price-range" class="form-check-input" />
                                        <label class="form-check-label" for="priceRange1">&lt;=$10</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Age ends -->

                        <!-- Sexe starts -->
                        <div class="brands">
                            <h6 class="filter-title">Sexe :</h6>
                            <ul class="list-unstyled brand-list">
                                <select class="form-select" id="basicSelect">
                                    <option>IT</option>
                                    <option>Blade Runner</option>
                                    <option>Thor Ragnarok</option>
                                </select>
                            </ul>
                        </div>
                        <!-- Sexe ends -->

                        <!-- langues starts -->
                        <div class="brands">
                            <h6 class="filter-title">Langues :</h6>
                            <ul class="list-unstyled brand-list">
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="productBrand1" />
                                        <label class="form-check-label" for="productBrand1">Insignia™</label>
                                    </div>
                                    <span>746</span>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="productBrand2" checked />
                                        <label class="form-check-label" for="productBrand2">Samsung</label>
                                    </div>
                                    <span>633</span>
                                </li>
                            </ul>
                        </div>
                        <!-- langues ends -->

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
