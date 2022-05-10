<?php

namespace App\Http\Controllers\InterfaceVisiteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recrutement;
use App\Models\Candidat;
use App\Models\Notification;
use App\Models\Projet;

use Carbon\Carbon;
use App\Models\Mail as Courrier;
use Mail;
use App\Mail\CandidateMailer;

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
        $offre = Recrutement::where('departement_id' ,'=', 0)->get();
        return view('interface_visit.offres',['offre' => $offre]);
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
        //Validate request
        $req = $request->validate([
            'photo' => 'required',
            'nom' => 'required',
            'sexe' => 'required',
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

            'titreProjet.*' => 'required',
            'dateProjet.*' => 'required',
            'description.*' => 'required',

            'nomCert.*' => 'required',
            'organisme.*' => 'required',
            'date.*' => 'required',

            'competence.*' => 'required',
        ],[

            'photo.required' => 'ce champ doit obligatoirement être rempli',
            'nom.required' => 'ce champ doit obligatoirement être rempli',
            'sexe.required' => 'ce champ doit obligatoirement être rempli',
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

            'titreProjet.*.required' => 'ce champ doit obligatoirement être rempli',
            'dateProjet.*.required' => 'ce champ doit obligatoirement être rempli',
            'description.*.required' => 'ce champ doit obligatoirement être rempli',

            'nomCert.*.required' => 'ce champ doit obligatoirement être rempli',
            'organisme.*.required' => 'ce champ doit obligatoirement être rempli',
            'date.*.required' => 'ce champ doit obligatoirement être rempli',

            'competence.*.required' => 'ce champ doit obligatoirement être rempli',
        ]);

        $photo = time() . $request->nom . '.' . $request->file('photo')->extension();
        $request->file('photo')->move(public_path('images\cvPhoto'),$photo);

        //calulate experience
        $nb_exp = 0;
        for ($i = 0; $i < count($request->titre); $i++) {

                $date_debut = Carbon::parse($request->date_debExp[$i]);
                $date_fin =  Carbon::parse($request->date_finExp[$i]);
                $nb_exp += $date_debut->diffInYears($date_fin);
        }

        //Store candidate
        $candidat = Candidat::create([
            'nom' => request('nom'),
            'sexe' => request('sexe'),
            'titre_pro' => request('titre_pro'),
            'email' => request('email'),
            'linkedin' => request('linkedin'),
            'tel' => request('tel'),
            'adresse' => request('adresse'),
            'profil_candidat' => request('profil'),
            'sexe' => request('sexe'),
            'langue' => request('langue'),
            'nb_experience' => $nb_exp,
            'photo' => $photo,
            'recrutement_id' => request('recrutement_id'),
        ]);

        //Store candidate trainings
        for ($i = 0; $i < count($request->ecole); $i++) {

            $candidat->formations()->create([
                'ecole' => $request->ecole[$i],
                'section' => $request->domaine[$i],
                'diplome' => $request->diplome[$i],
                'date_fin' => $request->date_fin[$i],
                'date_debut' => $request->date_deb[$i],
            ]);

        }

        //Store candidate experiences
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

        //Store candidate projects
        for ($i = 0; $i < count($request->titreProjet); $i++) {

            $candidat->projets()->create([
                'titre' => $request->titreProjet[$i],
                'date' => $request->dateProjet[$i],
                'description' => $request->description[$i],
            ]);

        }

        //Store candidate certifications
        for ($i = 0; $i < count($request->nomCert); $i++) {

            $candidat->certifications()->create([
                'nom' => $request->nomCert[$i],
                'organisme' => $request->organisme[$i],
                'date' => $request->date[$i],
            ]);

        }

        //Store candidate skills
        for ($i = 0; $i < count($request->competence); $i++) {

            $candidat->competances()->create([
                'designation' => $request->competence[$i],
            ]);

        }
        $notification = Notification::create([
            'content' => 'Nouvelle candidature',
            'source' => $candidat->id,
            'type' => 'Candidature',
        ]);
        return redirect('/career')->with('success','Votre candidature a été envoyé!');

        $mail = Courrier::where('type', '=','En cours de traitement')->first();

        Mail::to($candidat->email)->send(new CandidateMailer($mail->objet,$candidat->nom,$mail->contenu));
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
