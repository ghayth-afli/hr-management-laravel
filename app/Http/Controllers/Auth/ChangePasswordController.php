<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.passwords.change');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request)
    {
        $req = $request->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        if(Auth::user()->etatPassword == 'changed'){

            $req = $request->validate([
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6',
                'current_password' => ['required']
            ]);

            if (Hash::check($request->get('current_password'), auth()->user()->password)) {

                Auth::user()->update([
                    'password' => bcrypt($request->get('password')),
                    'etatPassword' => 'changed'
                ]);
                return redirect('home');
            }
            else{
                return redirect('/changePassword')->with('alert','Mot de passe incorrect');
            }
            
        }
        else{

            $req = $request->validate([
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6'
            ]);
            return redirect('home');
        }

    }

}
