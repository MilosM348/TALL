<?php

namespace App\Http\Livewire;
use App\Models\Date;

use Livewire\Component;

class Pikaday extends Component
{
    /** @var string */
    public $pikaday = '';

    public $rangepikaday = ['start_date' => '', 'end_date' => ''];

    public function pikaday()
    {
        $date = Date::create([
            'datepicker' => $this->pikaday,
            'rangedate_from' => $this->rangepikaday['start_date'],
            'rangedate_to' => $this->rangepikaday['end_date'],
        ]);
        return view('livewire.pikaday')->extends('layouts.app');
    }

    public function render()
    {
        return view('livewire.pikaday')->extends('layouts.app');
    }
}
