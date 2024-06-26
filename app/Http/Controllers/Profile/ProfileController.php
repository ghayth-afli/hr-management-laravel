<?php 

namespace App\Http\Controllers\Profile; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\Profile\UpdateProfileRequest; 
use App\Http\Requests\Profile\UpdatePasswordProfileRequest; 
use App\Http\Requests\Profile\UpdateAvatarProfileRequest; 


class ProfileController extends Controller 
{ 
	public function __construct() 
	{ 
		$this->middleware("auth");
	} 

	public function index() 
	{ 
		$user = Auth::user();

		$roles = Role::all();

		$roles_ids = Role::rolesUser($user);

		return view('profile.index',compact('user', 'roles', 'roles_ids'));
	}

	public function updateProfile(Request $request,$id)
    {
    	$user = User::find($id);

        if(!$user){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('user');
        }

        if($user != Auth::user()){
    		$this->flashMessage('warning', 'Error updating profile!', 'danger');            
            return redirect()->route('profile');
    	}
        else
        {
            $req = $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
            $user->update($req);
    
            $pro = $request->validate([
                'entreprise' => 'required',
                'tel' => 'required',
                'adresse' => 'required',
                'etat' => 'required',
            ]);
            $user->profil->update($pro);

            return redirect()->back()->with('success', 'Mise à jour du profil réussie !');   
        }

            
    }


	public function updatePassword(UpdatePasswordProfileRequest $request,$id)
    {
    	$user = User::find($id);    	

        if(!$user){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('user');
        }

        if($user != Auth::user()){
    		$this->flashMessage('warning', 'Error updating password!', 'danger');            
            return redirect()->route('profile');
    	}

        $request->merge(['password' => bcrypt($request->get('password'))]);

        $user->update($request->all());

        $this->flashMessage('check', 'Password updated successfully!', 'success');

        return redirect()->route('profile');
    }

    public function updateAvatar(UpdateAvatarProfileRequest $request,$id)
    {
    	$user = User::find($id);    	

        if(!$user){
        	$this->flashMessage('warning', 'User not found!', 'danger');            
            return redirect()->route('user');
        }

        if($user != Auth::user()){
    		$this->flashMessage('warning', 'Error updating avatar!', 'danger');            
            return redirect()->route('profile');
    	}

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ico|max:2048',
        ]);

        if($request->file('avatar')){
    		$file = $request->file('avatar');
    		$ext  = $file->guessClientExtension();
            $path = $file->move("profiles/$id", "avatar.{$ext}");
    		User::where('id', $id)->update(['avatar' => "profiles/$id/avatar.{$ext}"]);
    	}

        $this->flashMessage('check', 'Avatar updated successfully!', 'success');

        return redirect()->route('profile');
    }
}