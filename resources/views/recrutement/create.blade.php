@extends('layouts.AdminLTE.index')



@section('title')

@endsection



@section('css')


@endsection



@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">


                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nouvel offres d'emploi</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{ route('recrutement.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="poste">Poste :</label>
                                                    <input type="text" id="poste" class="form-control" placeholder="Ex : Développeurs Web" name="poste" />
                                                    @if($errors->has('poste'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('poste') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                            
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Type d'emploi désiré :</label>
                                                            <div class="demo-inline-spacing">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="type" id="Freelance" value="Freelance" >
                                                                    <label class="form-check-label" for="Freelance">Freelance</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="type" id="Mi-temps" value="Mi-temps" >
                                                                    <label class="form-check-label" for="Mi-temps">Mi-temps</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="type" id="Temps plein" value="Temps plein" >
                                                                    <label class="form-check-label" for="Temps plein">Temps plein</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="type" id="Stage" value="Stage" >
                                                                    <label class="form-check-label" for="Stage">Stage</label>
                                                                </div>
                                                            </div>
                                                    @if($errors->has('type'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('type') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="niveau_etude">Niveau d'étude :</label>
                                                    <input type="text" id="niveau_etude" class="form-control" placeholder="Ex : Bac + 3" name="niveau_etude" />
                                                    @if($errors->has('niveau_etude'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('niveau_etude') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">Postes vacants :</label>
                                                    <div class="input-group bootstrap-touchspin">
                                                        <span class="input-group-btn bootstrap-touchspin-injected">
                                                            <button class="btn btn-primary bootstrap-touchspin-down" type="button" onclick="decrement()">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                    <polyline points="6 9 12 15 18 9">
                                                                        
                                                                    </polyline>
                                                                </svg>
                                                            </button>
                                                        </span>
                                                        <input type="number" class="touchspin-icon form-control" name="nbr_poste" value=1 id=demoInput type=number min=1>
                                                        <span class="input-group-btn bootstrap-touchspin-injected">
                                                            <button class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="increment()">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
                                                                    <polyline points="18 15 12 9 6 15">

                                                                    </polyline>
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    </div>                                          
                                                    @if($errors->has('nbr_poste'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('nbr_poste') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="genre">Genre :</label>
                                                    <select class="form-select" id="genre" name="genre">
                                                            <option value="Indifférent">Indifférent</option>
                                                            <option value="Femme">Femme</option>
                                                            <option value="Homme">Homme</option>
                                                    </select>
                                                    @if($errors->has('genre'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('genre') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="country-floating">Expérience :</label>
                                                    <div class="input-group bootstrap-touchspin">
                                                        <span class="input-group-btn bootstrap-touchspin-injected">
                                                            <button class="btn btn-primary bootstrap-touchspin-down" type="button" onclick="decrement1()">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                    <polyline points="6 9 12 15 18 9">
                                                                        
                                                                    </polyline>
                                                                </svg>
                                                            </button>
                                                        </span>
                                                        <input type="number" class="touchspin-icon form-control" id=demoInput1 value=0 type=number min=0 name="experience">
                                                        <span class="input-group-btn bootstrap-touchspin-injected">
                                                            <button class="btn btn-primary bootstrap-touchspin-up" type="button" onclick="increment1()">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
                                                                    <polyline points="18 15 12 9 6 15">

                                                                    </polyline>
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    </div>                                          
                                                    @if($errors->has('experience'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('experience') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="langue">Langue :</label>
                                                    <input type="text" id="langue" class="form-control" placeholder="Ex : Français, Anglais, Arabe" name="langue" />
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
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="date_expiration">Date d'expiration :</label>
                                                    <input type="date" id="date_expiration" class="form-control" name="date_expiration" />

                                                    @if($errors->has('date_expiration'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('date_expiration') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                                <div class="mb-1">
                                                    <label class="form-label" for="departement">Département :</label>
                                                    <select class="form-select" id="departement" name="departement">
                                                        @foreach($departements as $departement)
                                                            <option value="{{$departement->id}}">{{$departement->nom}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('departement'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('departement') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mb-1">
                                                    <label class="form-label" for="description">Description de l'emploi :</label>
                                                    <textarea class="form-control" placeholder="Ex : Ama Group est à la recherche des développeurs Web qui maîtrisent les technologies PHP (Laravel ou Symfony) ou JS (ReactJS, VueJS, NodeJS, etc)" id="description" name="description" style="height: 100px"></textarea>
                                                    @if($errors->has('description'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('description') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mb-1">
                                                    <label class="form-label" for="exigences">Exigences de l'emploi :</label>
                                                    <textarea class="form-control" placeholder="Ex : Comportement positif,Autonomie et responsabilisation..." id="exigences" name="exigences" style="height: 100px"></textarea>
                                                    @if($errors->has('exigences'))
                                                        <div class="demo-spacing-0">
                                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                                <div class="alert-body d-flex align-items-center">
                                                                    <i data-feather="info" class="me-50"></i>
                                                                    <span>{{ $errors->first('exigences') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Ajouter</button>
                                                <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->  

@endsection



@section('js')

<script>
    function increment() {
        document.getElementById('demoInput').stepUp();
    }
    function decrement() {
        document.getElementById('demoInput').stepDown();
    }
    function increment1() {
        document.getElementById('demoInput1').stepUp();
    }
    function decrement1() {
        document.getElementById('demoInput1').stepDown();
    }
</script>

@endsection