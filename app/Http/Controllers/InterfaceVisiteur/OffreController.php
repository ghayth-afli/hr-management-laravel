<?php

namespace App\Http\Controllers\InterfaceVisiteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recrutement;
use App\Models\Candidat;

class OffreController extends Controller
{
    public function __construct() {
    $this->middleware('guest', ['except' => [
        'index',
         'show',
          'create',
           'store',
            'edit',
             'update',
                'destroy',
                'candidature',
                'postuler'
    ]]);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Recrutement::all();
        return view('interface_visit.offres', ['offres' =>  $offres]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offre = Recrutement::find($id);
        return view('interface_visit.offreDetails', ['offre' => $offre]);
    }

    /**
     * candidature.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function candidature($id)
    {
        $offre = Recrutement::find($id);
        return view('interface_visit.candidature', ['offre' => $offre]);
    }

     /**
     * postuler.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postuler(Request $request)
    {   
        $req = $request->validate([
            'photo' => 'required',
            'nom' => 'required',
            'titre_pro' => 'required',
            'email' => 'required|string|email|max:255',
            'tel' => 'required',
            'linkedin' => 'required',
            'adresse' => 'required',
            'langue' => 'required',
            'profil' => 'required',

            'ecole.*' => 'required',
            'domaine.*' => 'required',
            'diplome.*' => 'required',
            'date_deb.*' => 'required',
            'date_fin.*' => 'required',

            'titre.*' => 'required',
            'entreprise.*' => 'required',
            'emplacement.*' => 'required',
            'date_debExp.*' => 'required',
            'date_finExp.*' => 'required',
            'taches.*' => 'required',

            'nomCert.*' => 'required',
            'organisme.*' => 'required',
            'date.*' => 'required',

            'competence.*' => 'required',
        ],[

            'photo.required' => 'ce champ doit obligatoirement être rempli',
            'nom.required' => 'ce champ doit obligatoirement être rempli',
            'titre_pro.required' => 'ce champ doit obligatoirement être rempli',
            'email.required' => 'ce champ doit obligatoirement être rempli en respectant le format',
            'tel.required' => 'ce champ doit obligatoirement être rempli',
            'linkedin.required' => 'ce champ doit obligatoirement être rempli',
            'adresse.required' => 'ce champ doit obligatoirement être rempli',
            'langue.required' => 'ce champ doit obligatoirement être rempli',
            'profil.required' => 'ce champ doit obligatoirement être rempli',

            'ecole.*.required' => 'ce champ doit obligatoirement être rempli',
            'domaine.*.required' => 'ce champ doit obligatoirement être rempli',
            'diplome.*.required' => 'ce champ doit obligatoirement être rempli',
            'date_deb.*.required' => 'ce champ doit obligatoirement être rempli',
            'date_fin.*.required' => 'ce champ doit obligatoirement être rempli',

            'titre.*.required' => 'ce champ doit obligatoirement être rempli',
            'entreprise.*.required' => 'ce champ doit obligatoirement être rempli',
            'emplacement.*.required' => 'ce champ doit obligatoirement être rempli',
            'date_debExp.*.required' => 'ce champ doit obligatoirement être rempli',
            'date_finExp.*.required' => 'ce champ doit obligatoirement être rempli',
            'taches.*.required' => 'ce champ doit obligatoirement être rempli',

            'nomCert.*.required' => 'ce champ doit obligatoirement être rempli',
            'organisme.*.required' => 'ce champ doit obligatoirement être rempli',
            'date.*.required' => 'ce champ doit obligatoirement être rempli',

            'competence.*.required' => 'ce champ doit obligatoirement être rempli',
        ]);

        $candidat = Candidat::create([
            'nom' => request('nom'),
            'titre_pro' => request('titre_pro'),
            'email' => request('email'),
            'linkedin' => request('linkedin'),
            'tel' => request('tel'),
            'adresse' => request('adresse'),
            'profil_candidat' => request('profil'),
            'langue' => request('langue'),
            'photo' => request('photo'),
            'recrutement_id' => request('recrutement_id'),
        ]);

        for ($i = 0; $i < count($request->ecole); $i++) {

            $candidat->formations()->create([
                'ecole' => $request->ecole[$i],
                'domaine' => $request->domaine[$i],
                'diplome' => $request->diplome[$i],
                'date_fin' => $request->date_fin[$i],
                'date_debut' => $request->date_deb[$i],
            ]);

        }

        for ($i = 0; $i < count($request->titre); $i++) {

            $candidat->experiences()->create([
                'titre' => $request->titre[$i],
                'entreprise' => $request->entreprise[$i],
                'emplacement' => $request->emplacement[$i],
                'date_debut' => $request->date_debExp[$i],
                'date_fin' => $request->date_finExp[$i],
                'taches' => $request->taches[$i],
            ]);

        }

        for ($i = 0; $i < count($request->nomCert); $i++) {

            $candidat->certifications()->create([
                'nom' => $request->nomCert[$i],
                'organisme' => $request->organisme[$i],
                'date' => $request->date[$i],
            ]);

        }

        for ($i = 0; $i < count($request->competence); $i++) {

            $candidat->competances()->create([
                'designation' => $request->competence[$i],
            ]);

        }

        return redirect('/career')->with('success','Votre candidature a été envoyé!');
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
