@extends('layouts.AdminLTE.index')



@section('css') 
        
@endsection



@section('content')    
        <!-- BEGIN: Content-->
        <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">
            <form id="addRoleForm" class="row" action="{{ route('role.update',$role->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
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
                    value="{{$role->name}}"
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
                    value="{{$role->label}}"
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
                                    <input name="permissions[]" value="{{ $permission->id }}" class="form-check-input" type="checkbox" id="userManagementRead" 
                                    @if(in_array($permission->id, $permissions_ids))
                                        checked
                                    @endif 
                                    
                                    />
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
                <button type="submit" class="btn btn-primary me-1">Modifier</button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                    Annuler
                </button>
                </div>
      </form>
            </div>
        </div>
    </div>
    <!-- END: Content-->  
@endsection




@section('js')    

@endsection