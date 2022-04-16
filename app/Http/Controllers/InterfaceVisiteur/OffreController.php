<?php

namespace App\Http\Controllers\InterfaceVisiteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recrutement;

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
            dd($request);
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
