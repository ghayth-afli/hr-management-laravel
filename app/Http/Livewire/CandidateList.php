<?php

namespace App\Http\Livewire;
use App\Models\Candidat; 
use Livewire\Component;
use App\Models\Formation;

class CandidateList extends Component
{    
    public $Search;
    public $Section;
    public $Ecole;
    public $Etat;
    public $id_recrutement;
    public function render()
    {
        
        return view('livewire.candidate-list',
                    [
                        'Candidats' => Candidat::where('recrutement_id', '=',$this->id_recrutement)
                            ->search(trim($this->Search))
                            ->get()
                            ->sortByDesc("created_at")
                            ->take(4),
                        'sections' => Formation::select('section')->distinct('section')->get(),
                        'ecoles' => Formation::select('ecole')->distinct('ecole')->get(),
                        'etats' => Candidat::select('adresse')->distinct('adresse')->get(),
                    ]
            );
    }
}
