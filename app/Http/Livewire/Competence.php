<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Competence extends Component
{

    public $inputs = [1];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }
    public function render()
    {
        return view('livewire.competence');
    }
}
