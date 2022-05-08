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
    public $Sexe;
    public $Selected=0;
    public $SortBy="desc";

    public function render()
    {
        
        return view('livewire.candidate-list',
                    [
                        'Candidats' => Candidat::where('recrutement_id', '=',$this->id_recrutement)
                            ->where('selected', '=',$this->Selected)
                            ->join('formations', 'candidats.id', '=', 'formations.candidat_id')
                            ->when($this->Section, function ($query) {
                                $query->where('formations.section', $this->Section);})
                            ->when($this->Ecole, function ($query) {
                                $query->where('formations.ecole', $this->Ecole);})
                            ->when($this->Etat, function ($query) {
                                $query->where('candidats.adresse', $this->Etat);})
                            ->when($this->Sexe, function ($query) {
                                $query->where('candidats.sexe', $this->Sexe);})
                            ->search(trim($this->Search))
                            ->orderBy("candidats.nb_experience", $this->SortBy)
                            ->get()
                            ->sortByDesc("candidats.created_at"),
                            
                        'sections' => Formation::select('section')->distinct('section')->get(),
                        'ecoles' => Formation::select('ecole')->distinct('ecole')->get(),
                        'etats' => Candidat::select('adresse')->distinct('adresse')->get(),
                    ]
            );
    }

    public function select($id)
    {
        $candidat = Candidat::find($id);
        if($candidat->selected == 0)
        {
            $candidat->update([
                'selected' => 1
            ]);
        }
        else
        {
            $candidat->update([
                'selected' => 0
            ]);
        }
    }
}
