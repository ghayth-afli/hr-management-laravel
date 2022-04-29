<?php

namespace App\Http\Controllers;
use App\Models\Recrutement;
use App\Models\Candidat;
use App\Models\Departement;
use Illuminate\Http\Request;
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
        $recrutements = Recrutement::all();
        $candidats = Candidat::all();
        $candidatsAccepté = Candidat::where('etat', '=', 'Invitation d\'entretien')->get();
        $candidatsRefusé = Candidat::where('etat', '=', 'Refus de candidature')->get();
        $departements = Departement::all();
        $entretiens = Entretien::all();
        return view('home', ['recrutements' =>  $recrutements, 'candidats' =>  $candidats, 'departements' =>  $departements,'candidatsAccepté' =>  $candidatsAccepté,'candidatsRefusé' =>  $candidatsRefusé,'entretiens' =>  $entretiens]);       
    }
}
