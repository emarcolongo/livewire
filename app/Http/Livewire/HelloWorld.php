<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $publicName = 'Jelly';
    public $dataName = 'Edward';
    public $dataNameLazy = 'Edward';
    public $loud = false;
    public $greeting = 'Hello';
    public $greetingMultiple = ['Hello'];

    public function resetPublicName()
    {
        $this->publicName = 'Fernanda';
    }

    public function resetDataName($dataName = 'Fernanda')
    {
        $this->dataName = 'Paulo';
    }    

    public function render()
    {
        return view('livewire.hello-world', [
            'name'  =>  'Bean'
        ]);
    }

}
