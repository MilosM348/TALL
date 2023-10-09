<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Date;

class Datepicker extends Component
{
    /** @var string */
    public $datepicker = '';

    public $rangedate = ['rangedate_from' => '', 'rangedate_to' => ''];

    public function datepicker()
    {
        $date = Date::create([
            'datepicker' => $this->datepicker,
            'rangedate_from' => $this->rangedate['rangedate_from'],
            'rangedate_to' => $this->rangedate['rangedate_to'],
        ]);
        return view('livewire.datepicker')->extends('layouts.app');
    }

    public function render()
    {
        return view('livewire.datepicker')->extends('layouts.app');
    }
}
