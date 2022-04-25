<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Mail\ResetPassword;
use Hash;
use Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.passwords.forgot');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $req = $request->validate([
            'email' => 'required|string|email|max:255',
        ],[
            'email.required' => 'Email est est requis',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user != null) {
            $password = Str::random(8);
            $user->update([
                'password' => Hash::make($password),
                'etatPassword' => 'not changed'
            ]);
            Mail::to($request->email)->send(new ResetPassword($password,$request->email,$user->name));
            return view ('auth.passwords.sended',['email' => $request->email]);
        } else {
            return redirect()->route('forgotPassword')->with('error', 'ce compte n\'existe pas');
        
        
        //dd($request);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
