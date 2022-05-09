<?php

namespace App\Http\Controllers\GestionCandidature;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entretien;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Rapport;

class EntretienController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('show-entretien', Entretien::class);
        $entretiens = Entretien::all();
        return view('entretien.index',['entretiens'=>$entretiens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-entretien', Entretien::class);
        return view('entretien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create-entretien', Entretien::class);
        $req = $request->validate([
            'designation' => 'required',
            'time' => 'required',
            'date' => 'required',
        ],[
            'designation.required' => 'ce champ doit obligatoirement être rempli',
            'time.required' => 'ce champ doit obligatoirement être rempli',
            'date.required' => 'ce champ doit obligatoirement être rempli',
        ]);

        
        $entretien = Entretien::create([
        'designation' => request('designation'),
        'time' => request('time'),
        'date' => request('date'),
        ]);

        $notification = Notification::create([
            'content' => ' a planifié un entretien',
            'source' => Auth::user()->id,
            'type' => 'Système',
        ]);
        Auth::user()->rapports()->create([
            'contenu' => 'Entretien '.$entretien->designation.' ajouté',
        ]);
        return redirect('/entretien')->with('success','Entretien a été planifié!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entretiens = Entretien::find($id);
        return view('entretien.show',['entretiens'=>$entretiens]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit-entretien', Entretien::class);
        $entretien = Entretien::find($id);
        return view('entretien.edit',['entretien'=>$entretien]);
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
        $this->authorize('edit-entretien', Entretien::class);
        $entretien = Entretien::find($id);
        $req = $request->validate([
            'designation' => 'required',
            'time' => 'required',
            'date' => 'required',
        ],[
            'designation.required' => 'ce champ doit obligatoirement être rempli',
            'time.required' => 'ce champ doit obligatoirement être rempli',
            'date.required' => 'ce champ doit obligatoirement être rempli',
        ]);

        
        $entretien->update([
        'designation' => request('designation'),
        'time' => request('time'),
        'date' => request('date'),
        ]);

        $notification = Notification::create([
            'content' => ' a planifié un entretien',
            'source' => Auth::user()->id,
            'type' => 'Système',
        ]);
        Auth::user()->rapports()->create([
            'contenu' => 'Entretien '.$entretien->designation.' modifié',
        ]);
        return redirect('/entretien')->with('success','Entretien a été planifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $entretien=Entretien::find($id);
        $this->authorize('destroy-entretien', Entretien::class);
        Entretien::destroy($id);
        $notification = Notification::create([
            'content' => ' a supprimé un entretien',
            'source' => Auth::user()->id,
            'type' => 'Système',
        ]);
        Auth::user()->rapports()->create([
            'contenu' => 'Entretien '.$entretien->designation.' supprimé',
        ]);
        return redirect('/entretien')->with('success','Entretien supprimé avec succès ! ');
    }
}
