@extends('layouts.AdminLTE.index') 

@section('icon_page', 'user') 

@section('css')

@endsection

@section('content') 

<!-- BEGIN: Content-->

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        @if(session()->has('success'))
          <div class="demo-spacing-0">
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <div class="alert-body">
            {{ session()->get('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        @endif
    <div class="content-body"><div class="row">
        
<div class="col-12">

  <!-- profile -->
  

  <div class="card">
    <div class="card-header border-bottom">
      <h4 class="card-title">Profile</h4>
    </div>

    

    <div class="card-body py-2 my-25">
      <!-- header section -->
      <div class="d-flex">
        <a href="#" class="me-25">
            @if(file_exists(Auth::user()->avatar))
          <img
            src="{{ asset(Auth::user()->avatar) }}"
            id="account-upload-img"
            class="uploadedAvatar rounded me-50"
            alt="profile image"
            height="100"
            width="100"
          />
          @else
          <img
            src="{{ asset('img/config/nopic.png') }}"
            id="account-upload-img"
            class="uploadedAvatar rounded me-50"
            alt="profile image"
            height="100"
            width="100"
          />
          @endif
        </a>
        <!-- upload and reset button -->
        <div class="d-flex align-items-end mt-75 ms-1">
          <div>
            <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
            <form action="{{ route('profile.update.avatar',$user->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <input type="file" id="account-upload" name="avatar" hidden accept="image/*" />
                <!--button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Save Avatar</button>-->
                <button type="submit" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Update</button>
              </form>

            <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
          </div>
        </div>
        <!--/ upload and reset button -->
      </div>
      <!--/ header section -->

      <!-- form -->
      <form class="validate-form mt-2 pt-50" action="{{ route('profile.update.profile',$user->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <div class="row">
          <div class="col-12 col-sm-6 mb-1">
            <label class="form-label" for="accountFirstName">Nom</label>
            <input
              type="text"
              class="form-control"
              id="accountFirstName"
              value="{{Auth::user()->name}}"
              name="name"
              data-msg="Please enter first name"
            />
          </div>
          <div class="col-12 col-sm-6 mb-1">
            <label class="form-label" for="accountEmail">Email</label>
            <input
              type="email"
              class="form-control"
              id="accountEmail"
              name="email"
              placeholder="Email"
              value="{{$user->email}}"
            />
          </div>
          <div class="col-12 col-sm-6 mb-1">
            <label class="form-label" for="accountOrganization">Entreprise</label>
            <input
              type="text"
              class="form-control"
              id="accountOrganization"
              name="entreprise"
              placeholder="Organization name"
              value="{{$user->profil->entreprise}}"
            />
          </div>
          <div class="col-12 col-sm-6 mb-1">
            <label class="form-label" for="accountPhoneNumber">Numéro de téléphone</label>
            <input
              type="text"
              class="form-control account-number-mask"
              id="tel"
              name="tel"
              placeholder="Tel"
              value="{{$user->profil->tel}}"
            />
          </div>
          <div class="col-12 col-sm-6 mb-1">
            <label class="form-label" for="accountAddress">Address</label>
            <input type="text" class="form-control" id="accountAddress" name="adresse" placeholder="Your Address"  value="{{$user->profil->adresse}}"/>
          </div>
          <div class="col-12 col-sm-6 mb-1">
            <label class="form-label" for="accountState">État</label>
            <input type="text" class="form-control" id="accountState" name="etat" placeholder="State" value="{{$user->profil->etat}}" />
          </div>
          <div class="col-12 col-sm-6 mb-1">
            <label for="language" class="form-label">Langue</label>
            <select id="language" class="select2 form-select" name="langue">
              <option value="" >Choisir la langue</option>
              <option value="en">English</option>
              <option value="fr">French</option>
            </select>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary mt-1 me-1">Sauvegarder</button>
            <button type="reset" class="btn btn-outline-secondary mt-1">Annuler</button>
          </div>
        </div>
      </form>
      <!--/ form -->
    </div>
  </div>

  <!--/ profile -->
</div>
</div>

      </div>
    </div>
  </div>
  
  <!-- END: Content-->

@endsection
