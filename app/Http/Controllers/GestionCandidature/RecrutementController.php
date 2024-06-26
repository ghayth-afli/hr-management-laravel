<?php

namespace App\Http\Controllers\GestionCandidature;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recrutement;
use App\Models\Departement;
use App\Models\Notification;
use App\Models\Rapport;
use Illuminate\Support\Facades\Auth;

class RecrutementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('show-recrutement', Recrutement::class);
        $recrutements = Recrutement::withCount('candidats')->get();
        //$recrutements = Recrutement::all();

        return view('recrutement.index', ['recrutements' =>  $recrutements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-recrutement', Recrutement::class);
        $departements = Departement::all();
        return view('recrutement.create', ['departements' =>  $departements]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create-recrutement', Recrutement::class);
        $req = $request->validate([
            'poste' => 'required',
            'nbr_poste' => 'required',
            'type' => 'required',
            'lieu' => 'required',
            'experience' => 'required',
            'niveau_etude' => 'required',
            'langue' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'exigences' => 'required',
            'date_expiration' => 'required',
            'departement' => 'required',
        ],[
            'poste.required' => 'ce champ doit obligatoirement être rempli',
            'nbr_poste.required' => 'ce champ doit obligatoirement être rempli',
            'lieu.required' => 'ce champ doit obligatoirement être rempli',
            'type.required' => 'ce champ doit obligatoirement être rempli',
            'experience.required' => 'ce champ doit obligatoirement être rempli',
            'niveau_etude.required' => 'ce champ doit obligatoirement être rempli',
            'langue.required' => 'ce champ doit obligatoirement être rempli',
            'genre.required' => 'ce champ doit obligatoirement être rempli',
            'description.required' => 'ce champ doit obligatoirement être rempli',
            'exigences.required' => 'ce champ doit obligatoirement être rempli',
            'date_expiration.required' => 'ce champ doit obligatoirement être rempli',
            'departement.required' => 'ce champ doit obligatoirement être rempli',
        ]);

        
        $recrutement = Recrutement::create([
        'poste' => request('poste'),
        'nbr_poste' => request('nbr_poste'),
        'type' => request('type'),
        'lieu' => request('lieu'),
        'experience' => request('experience'),
        'niveau_etude' => request('niveau_etude'),
        'langue' => request('langue'),
        'genre' => request('genre'),
        'description' => request('description'),
        'exigences' => request('exigences'),
        'date_expiration' => request('date_expiration'),
        'departement_id' => request('departement'),
        'user_id' => auth()->id()
        ]);

        $notification = Notification::create([
            'content' => ' a postulé une nouvelle offre de travail',
            'source' => Auth::user()->id,
            'type' => 'Système',
        ]);
        Auth::user()->rapports()->create([
            'contenu' => 'Recrutement'.$recrutement->poste.'ajouté',
        ]);
        return redirect('/recrutement')->with('success','Nouvel offre d\'emploi a été ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('show-recrutement', Recrutement::class);
        $recrutement = Recrutement::find($id);
        return view('recrutement.show', ['recrutement' => $recrutement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit-recrutement', Recrutement::class);
        $recrutement = Recrutement::find($id);
        $departements = Departement::all();
        return view('recrutement.edit', ['recrutement' => $recrutement,'departements' => $departements]);
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
        $this->authorize('edit-recrutement', Recrutement::class);
        $req = $request->validate([
            'poste' => 'required',
            'nbr_poste' => 'required',
            'lieu' => 'required',
            'type' => 'required',
            'experience' => 'required',
            'niveau_etude' => 'required',
            'langue' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'exigences' => 'required',
            'date_expiration' => 'required',
            'departement' => 'required',
        ],[
            'poste.required' => 'ce champ doit obligatoirement être rempli',
            'nbr_poste.required' => 'ce champ doit obligatoirement être rempli',
            'lieu.required' => 'ce champ doit obligatoirement être rempli',
            'type.required' => 'ce champ doit obligatoirement être rempli',
            'experience.required' => 'ce champ doit obligatoirement être rempli',
            'niveau_etude.required' => 'ce champ doit obligatoirement être rempli',
            'langue.required' => 'ce champ doit obligatoirement être rempli',
            'genre.required' => 'ce champ doit obligatoirement être rempli',
            'description.required' => 'ce champ doit obligatoirement être rempli',
            'exigences.required' => 'ce champ doit obligatoirement être rempli',
            'date_expiration.required' => 'ce champ doit obligatoirement être rempli',
            'departement.required' => 'ce champ doit obligatoirement être rempli',
        ]);

        $recrutement=Recrutement::find($id);
        $recrutement->update([
        'poste' => request('poste'),
        'nbr_poste' => request('nbr_poste'),
        'lieu' => request('lieu'),
        'type' => request('type'),
        'experience' => request('experience'),
        'niveau_etude' => request('niveau_etude'),
        'langue' => request('langue'),
        'genre' => request('genre'),
        'description' => request('description'),
        'exigences' => request('exigences'),
        'date_expiration' => request('date_expiration'),
        'departement_id' => request('departement'),
        'user_id' => auth()->id()
        ]);

        $notification = Notification::create([
            'content' => ' a modifié une offre de travail',
            'source' => Auth::user()->id,
            'type' => 'Système',
        ]);
        Auth::user()->rapports()->create([
            'contenu' => 'Recrutement '.$recrutement->poste.' modifié',
        ]);
        return redirect('/recrutement')->with('success','Nouvel offre d\'emploi a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('destroy-recrutement', Recrutement::class);
        $recrutement=Recrutement::find($id);
        Recrutement::destroy($id);
        $notification = Notification::create([
            'content' => ' a supprimé une offre de travail',
            'source' => Auth::user()->id,
            'type' => 'Système',
        ]);
        Auth::user()->rapports()->create([
            'contenu' => 'Recrutement '.$recrutement->poste.' supprimé',
        ]);
        return redirect('/recrutement')->with('success','recrutement supprimé avec succès ! ');
    }
}
