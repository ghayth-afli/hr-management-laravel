<?php 

namespace App\Http\Controllers\User; 

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\UpdatePasswordUserRequest;
use App\Models\User; 
use App\Models\Role; 
use App\Mail\NewPasswordMail;
use Hash;
use Mail;
use App\Models\Rapport;
use Illuminate\Support\Str;

class UserController extends Controller 
{ 
    public function index()
    { 
        $this->authorize('show-user', User::class);

        $users = User::paginate(15);

        return view('users.index', compact('users'));
    }

    public function show($id)
    { 
    	$this->authorize('show-user', User::class);

    	$user = User::find($id);

    	if(!$user){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('user');
        }  

        $roles = Role::all();

		$roles_ids = Role::rolesUser($user);      	               

        return view('users.show',compact('user', 'roles', 'roles_ids'));
    }

    public function create()
    {
        $this->authorize('create-user', User::class);

        $roles = Role::all();

        return view('users.create',compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $this->authorize('create-user', User::class);

        $pass = Str::random(8);
        $password = Hash::make($pass);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
        ]);

        $roles = $request->input('roles') ? $request->input('roles') : [];

        $user->roles()->sync($roles);

        $user->profil()->create(
            
        );

        $recipient = $request->name;

        Mail::to($request->email)->send(new NewPasswordMail($pass,$request->email,$recipient));

        $this->flashMessage('check', 'User successfully added!', 'success');
        Auth::user()->rapports()->create([
            'contenu' => 'Utilisateur '.$user->name.' ajouté',
        ]);

        return redirect()->route('user.create');
    }

    public function edit($id)
    { 
    	$this->authorize('edit-user', User::class);

    	$user = User::find($id);

    	if(!$user){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('user');
        }  

        $roles = Role::all();

		$roles_ids = Role::rolesUser($user);       	               

        return view('users.edit',compact('user', 'roles', 'roles_ids'));
    }

    public function update(UpdateUserRequest $request,$id)
    {
    	$this->authorize('edit-user', User::class);

    	$user = User::find($id);

        if(!$user){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('user');
        }

        $user->update($request->all());

        $roles = $request->input('roles') ? $request->input('roles') : [];

        $user->roles()->sync($roles);

        $this->flashMessage('check', 'User updated successfully!', 'success');

        return redirect()->route('user');
    }

    public function updatePassword(UpdatePasswordUserRequest $request,$id)
    {
    	$this->authorize('edit-user', User::class);

    	$user = User::find($id);

        if(!$user){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('user');
        }

        $request->merge(['password' => bcrypt($request->get('password'))]);

        $user->update($request->all());

        $this->flashMessage('check', 'User password updated successfully!', 'success');

        return redirect()->route('user');
    }

    public function editPassword($id)
    { 
    	$this->authorize('edit-user', User::class);

    	$user = User::find($id);

    	if(!$user){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('user');
        }              	               

        return view('users.edit_password',compact('user'));
    }

    public function destroy($id)
    {
        $this->authorize('destroy-user', User::class);
        $user=User::find($id);

        $user = User::find($id);

        if(!$user){
            $this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('user');
        }

        $user->delete();

        $this->flashMessage('check', 'User successfully deleted!', 'success');
        Auth::user()->rapports()->create([
            'contenu' => 'Utilisateur '.$user->name.' supprimé',
        ]);
        return redirect()->route('user');
    }
}