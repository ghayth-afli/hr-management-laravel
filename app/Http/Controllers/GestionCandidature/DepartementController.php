<?php

namespace App\Http\Controllers\GestionCandidature;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class DepartementController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('show-departement', Departement::class);

        $departements = Departement::all();

        return view('departement.index', ['departements' =>  $departements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-departement', Departement::class);
        return view('departement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create-departement', Departement::class);
        $req = $request->validate([
            'nom' => 'required',
            'etat_recrutement' => 'required',
        ],[
            'nom.required' => 'Nom de departement est requis',
            'etat_recrutement.required' => 'Etat recrutement est requis',
        ]);

        
        $departement = Departement::create([
        'nom' => request('nom'),
        'etat_recrutement' => request('etat_recrutement'),
        'user_id' => auth()->id()
        ]);

        $notification = Notification::create([
            'content' => Auth::user()->name.' a ajouté un nouvelle departement',
            'type' => 'system',
            ]);
        
        return redirect('/departement')->with('success','Departement a été ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('show-departement', Departement::class);
        $departement = Departement::find($id);
        return view('departement.show', ['departement' => $departement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit-departement', Departement::class);
        $departement = Departement::find($id);
        return view('departement.edit', ['departement' => $departement]);
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
        $this->authorize('edit-departement', Departement::class);
        $req = $request->validate([
            'nom' => 'required',
            'etat_recrutement' => 'required',
        ],[
            'nom.required' => 'nom is required',
            'etat_recrutement.required' => 'etat_recrutement is required',
        ]);
        $departement=Departement::find($id);
        $departement->update([
            'nom' => request('nom'),
            'etat_recrutement' => request('etat_recrutement'),
            ]);

        return redirect('/departement')->with('success','Mis à jour avec succès ! ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('destroy-departement', Departement::class);
        Departement::destroy($id);
        return redirect('/departement')->with('success','Département supprimé avec succès ! ');
    }
}
