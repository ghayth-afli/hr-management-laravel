<?php

namespace App\Http\Livewire;
use App\Models\Recrutement;
use Livewire\Component;
use App\Models\Departement;

class Career extends Component
{
    public $Type;
    public $Departement;
    public $Lieu;
    public $Search;
    public $SortBy="desc";
    public function render()
    {
        return view('livewire.career',[
            'departements'=>Departement::all(),
            'recrutements'=>Recrutement::when($this->Type, function ($query) {
                            $query->where('type', $this->Type);})
                    ->when($this->Departement, function ($query) {
                            $query->where('departement_id', $this->Departement);})
                    ->when($this->Lieu, function ($query) {
                            $query->where('lieu', $this->Lieu);})
                    ->search(trim($this->Search))
                    ->orderBy("created_at", $this->SortBy)
                    ->get(),
        ]);
    }
}
