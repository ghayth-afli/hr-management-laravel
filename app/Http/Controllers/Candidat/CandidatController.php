<?php

namespace App\Http\Controllers\Candidat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidat; 
use App\Models\Entretien; 
use App\Models\Recrutement; 
use App\Models\Mail as Courrier;
use Mail;
use App\Mail\CandidateMailer;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //$this->authorize('show-candidat', Departement::class);
        $recrutement = Recrutement::find($id);
        return view('candidat.index',['id_recrutement' => $id,'recrutement' => $recrutement]);
    }

    /**
     * Planifier.
     *
     * @return \Illuminate\Http\Response
     */
    public function planifier($id)
    {
        $entretiens = Entretien::all();
        $candidat = Candidat::find($id);
        return view('candidat.planification',['candidat' => $candidat,'entretiens' => $entretiens]);
    }

    /**
     * Inviter.
     *
     * @return \Illuminate\Http\Response
     */
    public function inviter(Request $request)
    {
        $request->validate([
            'id_entretien' => 'required',
            'id_candidat' => 'required',
        ],[
            'id_entretien' => 'ce champ doit obligatoirement être rempli',
            'id_candidat' => 'ce champ doit obligatoirement être rempli',
        ]);

        $candidat = Candidat::find($request->id_candidat);

        $entretien = Entretien::find($request->id_entretien);

        $candidat->entretiens()->attach($entretien);

        $candidat->update([
            'etat' => 'Invitation d\'entretien'
        ]);

        $mail = Courrier::where('type', '=','Invitation d\'entretien')->first();

        Mail::to($candidat->email)->send(new CandidateMailer($mail->objet,$candidat->nom,$mail->contenu));

        return redirect('/entretien')->with('success','Invitation à été envoyé avec succès !');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$this->authorize('show-candidat', Departement::class);
        $candidat = Candidat::find($id);
        return view('candidat.cvBuilder',['candidat' => $candidat]);
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
