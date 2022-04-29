<?php

namespace App\Http\Controllers;
use App\Models\Recrutement;
use App\Models\Candidat;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Entretien;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $users = User::all();
        $recrutements = Recrutement::all();
        $candidats = Candidat::all();
        $candidatsAccepté = Candidat::where('etat', '=', 'Invitation d\'entretien')->get();
        $candidatsRefusé = Candidat::where('etat', '=', 'Refus de candidature')->get();
        $departements = Departement::all();
        $entretiens = Entretien::all();
        $entretien = Entretien::all()->sortByDesc("date")->take(1);
        return view('home', ['recrutements' =>  $recrutements, 'candidats' =>  $candidats, 'departements' =>  $departements,'candidatsAccepté' =>  $candidatsAccepté,'candidatsRefusé' =>  $candidatsRefusé,'entretiens' =>  $entretiens,'entretien' =>  $entretien,'users' =>  $users]);       
    }
}
