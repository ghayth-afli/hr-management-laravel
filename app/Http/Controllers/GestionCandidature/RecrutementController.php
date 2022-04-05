<?php

namespace App\Http\Controllers\GestionCandidature;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recrutement;

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
        return view('recrutement.create');
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
        return view('recrutement.edit', ['recrutement' => $recrutement]);
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
        $this->authorize('destroy-recrutement', Recrutement::class);
        Recrutement::destroy($id);
        return redirect('/recrutement')->with('success','recrutement supprimé avec succès ! ');
    }
}
