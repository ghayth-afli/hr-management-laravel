@extends('layouts.AdminLTE.index')

@section('css')	
		

@endsection


@section('content')    
        
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
      </div>
      <div class="content-body">

<!-- Role cards -->
<div class="row">
    @foreach($roles as $role)
        <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
                @foreach($rolesc as $rl)
                  @if($rl->name == $role->name)
                    <span>Total: {{$rl->users_count}} utilisateurs</span>
                  @endif
                @endforeach
                <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                    @foreach($users_roles as $user_roles)
                      @foreach($user_roles->roles as $user_role)
                        @if($user_role->pivot->role_id == $role->id)
                                <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                title="{{$user_roles->name}}"
                                class="avatar avatar-sm pull-up"
                                >
                                    <img class="rounded-circle" src="{{$user_roles->avatar}}" alt="Avatar" />
                                </li>
                        @endif
                      @endforeach
                    @endforeach
                </ul>
            </div>
            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                <div class="role-heading">
                <h4 class="fw-bolder">{{ $role->name }}</h4>
                <a href="{{ route('role.edit', $role->id) }}" class="role-edit-modal" >
                    <small class="fw-bolder">Edit Role</small>
                </a>
                </div>
                <a href="javascript:void(0);" class="text-body"><i data-feather="copy" class="font-medium-5"></i></a>
            </div>
            </div>
        </div>
        </div>
    @endforeach

    <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
        <div class="row">
        <div class="col-sm-5">
            <div class="d-flex align-items-end justify-content-center h-100">
            <img
                src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/faq-illustrations.svg"
                class="img-fluid mt-2"
                alt="Image"
                width="85"
            />
            </div>
        </div>
        <div class="col-sm-7">
            <div class="card-body text-sm-end text-center ps-sm-0">
            <a
                href="javascript:void(0)"
                data-bs-target="#addRoleModal"
                data-bs-toggle="modal"
                class="stretched-link text-nowrap add-new-role"
            >
                <span class="btn btn-primary mb-1">Ajouter un rôle</span>
            </a>
            <p class="mb-0">Ajouter un rôle, s'il n'existe pas </p>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!--/ Role cards -->

<!-- table -->
<!-- table -->
        <!-- Add Role Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
  <div class="modal-content">
    <div class="modal-header bg-transparent">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body px-5 pb-5">
      <div class="text-center mb-4">
        <h1 class="role-title">Ajouter un nouveau rôle </h1>
        <p>Définir les autorisations de rôle </p>
      </div>
      <!-- Add role form -->
      <form id="addRoleForm" class="row" action="{{ route('role.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-12">
          <label class="form-label" for="modalRoleName">Role</label>
          <input
            type="text"
            id="modalRoleName"
            name="name"
            class="form-control"
            placeholder="Entrez le nom du rôle"
            tabindex="-1"
            data-msg="Veuillez entrer le nom du rôle "
          />
          @if($errors->has('name'))
            <span id="login-email-error" class="error">{{ $errors->first('name') }}</span>
          @endif

        </div>
        <div class="col-12">
          <label class="form-label" for="modalRoleName">Description</label>
          <input
            type="text"
            id="modalRoleName"
            name="label"
            class="form-control"
            placeholder="Entrez le description du rôle"
            tabindex="-1"
            data-msg="Veuillez entrer le description du rôle"
          />
          @if($errors->has('label'))
            <span id="login-email-error" class="error">{{ $errors->first('label') }}</span>
          @endif

        </div>
        <div class="col-12">
          <h4 class="mt-2 pt-50">Permissions</h4>
          <!-- Permission table -->
          <div class="table-responsive">
            <table class="table table-flush-spacing">
              <tbody>
                @foreach($permission_groups as $permission_group)
                  @if($permission_group->id > 1)
                    <tr>
                        <a href="#{{ $permission_group->id }}"><td class="text-nowrap fw-bolder">{{ $permission_group->name }}</td></a>
                      <td>
                        <div class="d-flex">
                          @foreach($permission_group->permissions as $permission)
                            <div class="form-check me-3 me-lg-5">
                              <input name="permissions[]" value="{{ $permission->id }}" class="form-check-input" type="checkbox" id="userManagementRead" />
                              <label class="form-check-label" for="userManagementRead"> {{ $permission->label }} </label>
                            </div>
                          @endforeach  
                        </div>
                      </td>
                    </tr>
                  @endif
                @endforeach                

              </tbody>
            </table>
          </div>
          <!-- Permission table -->
        </div>
        <div class="col-12 text-center mt-2">
          <button type="submit" class="btn btn-primary me-1">Ajouter</button>
          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
            Annuler
          </button>
        </div>
      </form>
      <!--/ Add role form -->
    </div>
  </div>
</div>
</div>
<!--/ Add Role Modal -->

      </div>
    </div>
  </div> 

@endsection

@section('js')
    
@endsection


@include('layouts.AdminLTE._includes._data_tables')