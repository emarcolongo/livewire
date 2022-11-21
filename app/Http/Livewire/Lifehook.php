<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lifehook extends Component
{
    public $name = 'Eduardo';
    public $hidrateMethod = '_blank';
    public $updatedMethod = '_updated';

    public function mount()
    {
        $this->name = 'Fernanda';
    }

    public function hydrate()
    {
        $this->hidrateMethod = 'Hidrated@';
    }

    public function updated()
    {
        $this->updatedMethod = 'Updated@';
    }

    public function render()
    {
        return view('livewire.lifehook');
    }
}
