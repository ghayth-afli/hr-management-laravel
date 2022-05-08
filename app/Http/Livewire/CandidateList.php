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
    public $SortBy;
    public function render()
    {
        
        return view('livewire.candidate-list',
                    [
                        'Candidats' => Candidat::where('recrutement_id', '=',$this->id_recrutement)
                            ->join('formations', 'candidats.id', '=', 'formations.candidat_id')
                            ->when($this->Section, function ($query) {
                                $query->where('formations.section', $this->Section);})
                            ->when($this->Ecole, function ($query) {
                                $query->where('formations.ecole', $this->Ecole);})
                            ->when($this->Etat, function ($query) {
                                $query->where('adresse', $this->Etat);})
                            ->search(trim($this->Search))
                            ->get()
                            ->sortByDesc("created_at")
                            ->orderBy("created_at", $this->SortBy),
                            
                        'sections' => Formation::select('section')->distinct('section')->get(),
                        'ecoles' => Formation::select('ecole')->distinct('ecole')->get(),
                        'etats' => Candidat::select('adresse')->distinct('adresse')->get(),
                    ]
            );
    }
}
