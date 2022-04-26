<?php

namespace App\Http\Livewire;
use App\Models\Candidat; 
use Livewire\Component;

class CandidateList extends Component
{
    public $id_recrutement;
    public function render()
    {
        $Candidats = Candidat::where('recrutement_id', '=',$this->id_recrutement)->get()->sortByDesc("created_at")->take(4);
        return view('livewire.candidate-list',['Candidats' => $Candidats]);
    }
}
