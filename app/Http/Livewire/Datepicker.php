<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Date;

class Datepicker extends Component
{
    /** @var string */
    public $datepicker = '';

    /** @var string */
    public $rangedateFrom = '';

    /** @var string */
    public $rangedateTo = '';

    public function datepicker()
    {
        $date = Date::create([
            'datepicker' => $this->datepicker,
            'rangedate_from' => $this->rangedateFrom,
            'rangedate_to' => $this->rangedateTo,
        ]);
        return view('livewire.datepicker')->extends('layouts.app');
    }

    public function render()
    {
        return view('livewire.datepicker')->extends('layouts.app');
    }
}
