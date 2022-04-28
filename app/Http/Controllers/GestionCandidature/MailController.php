<?php

namespace App\Http\Controllers\GestionCandidature;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mail;

class MailController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('show-mail', Mail::class);
        $Mails = Mail::all();
        return view('mail.index',['Mails'=>$Mails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create-mail', Mail::class);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('show-mail', Mail::class);
        $Mail = Mail::find($id);
        return view('mail.show',['Mail'=>$Mail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit-mail', Mail::class);
        $Mail = Mail::find($id);
        return view('mail.edit',['Mail'=>$Mail]);
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
        $this->authorize('edit-mail', Mail::class);
        $req = $request->validate([
            'objet' => 'required',
            'contenu' => 'required',
        ],[
            'objet.required' => 'ce champ doit obligatoirement être rempli',
            'contenu.required' => 'ce champ doit obligatoirement être rempli',
        ]);
        $mail=Mail::find($id);
        $mail->update([
            'objet' => request('objet'),
            'contenu' => request('contenu'),
            ]);
        return redirect('/mail')->with('success','Mis à jour avec succès ! ');
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
