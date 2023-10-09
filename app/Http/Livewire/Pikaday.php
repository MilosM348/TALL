<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pikaday extends Component
{
    /** @var string */
    public $pikaday = '';

    public $rangepikaday = [];

    public $errors = [];

    public function pikaday()
    {
        echo $this->rangepikaday;
        // return view('livewire.pikaday')->extends('layouts.app');
    }

    public function render()
    {
        return view('livewire.pikaday')->extends('layouts.app');
    }
}
