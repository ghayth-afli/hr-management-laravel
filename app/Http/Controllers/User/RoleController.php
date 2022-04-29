<?php 

namespace App\Http\Controllers\User; 

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreRoleRequest;  
use App\Http\Requests\User\UpdateRoleRequest;  
use App\Models\Role; 
use App\Models\User; 
use App\Models\PermissionGroup; 
use App\Models\Permission; 
use App\Models\Rapport;

class RoleController extends Controller 
{ 
    public function index()
    { 
        $this->authorize('show-role','create-role', Role::class);
        $rolesc = Role::withCount('users')->get();
        $roles = Role::paginate(15);
        $permission_groups = PermissionGroup::all();

        $users_roles = User::with(['roles'])->get();

        return view('users.roles.index', compact('users_roles','roles','rolesc','permission_groups'));
    }

    public function show($id)
    { 
        $this->authorize('show-role', User::class);

        $role = Role::find($id);

        if(!$role){
            $this->flashMessage('warning', 'Permission not found!', 'danger');            
            return redirect()->route('role');
        }  

        $permissions_ids = Permission::permissionsRole($role);

        $permission_groups = PermissionGroup::all();                       

        return view('users.roles.show',compact('role', 'permissions_ids', 'permission_groups'));
    }

    public function create()
    {
        $this->authorize('create-role', Role::class);

        $permission_groups = PermissionGroup::all();

        return view('users.roles.create', compact('permission_groups'));
    }

    public function store(StoreRoleRequest $request)
    {
        $this->authorize('create-role', Role::class);

        $role = Role::create($request->all());

        $permissions = $request->input('permissions') ? $request->input('permissions') : [];

        $role->permissions()->sync($permissions);

        $this->flashMessage('check', 'Permission successfully added!', 'success');
        Auth::user()->rapports()->create([
            'contenu' => 'Role '.$role->name.' ajouté',
        ]);

        return redirect()->route('role')->with('success', 'Role ajouté avec succès !');
    }

    public function edit($id)
    { 
        $this->authorize('edit-role', Role::class);

        $role = Role::find($id);

        if(!$role){
            $this->flashMessage('warning', 'Permission not found!', 'danger');            
            return redirect()->route('role');
        }  

        $permissions_ids = Permission::permissionsRole($role);

        $permission_groups = PermissionGroup::all();                       

        return view('users.roles.edit',compact('role', 'permission_groups', 'permissions_ids'));
    }

    public function update(UpdateRoleRequest $request,$id)
    {
        $this->authorize('edit-role', User::class);

        $role = Role::find($id);

        if(!$role){
            $this->flashMessage('warning', 'Permission not found!', 'danger');            
            return redirect()->route('role');
        }

        $role->update($request->all());

        $permissions = $request->input('permissions') ? $request->input('permissions') : [];

        $role->permissions()->sync($permissions);

        $this->flashMessage('check', 'Permission successfully updated!', 'success');
        Auth::user()->rapports()->create([
            'contenu' => 'Role '.$role->name.' modifié',
        ]);


        return redirect()->route('role')->with('success', 'Mise à jour du role réussie !');
    }

    public function destroy($id)
    {
        $this->authorize('destroy-role', Role::class);

        $role = Role::find($id);

        if(!$role){
            $this->flashMessage('warning', 'Permissão não encontrada!', 'danger');            
            return redirect()->route('role');
        }

        $role->delete();
        Auth::user()->rapports()->create([
            'contenu' => 'Role '.$role->name.'supprimé',
        ]);

        $this->flashMessage('check', 'Permission successfully deleted!', 'success');

        return redirect()->route('role')->with('success', 'Role supprimé avec succès !');
    }
}