<?php

namespace App\Livewire;

use Livewire\Component;

class DropdownResult extends Component
{
    public $selectedValue;

    protected $listeners = ['dropdownResponseReceived'];

    public function dropdownResponseReceived($data)
    {
        // Update the component's data with the API response
        $this->selectedValue = $data;
    }

    public function render()
    {
        return view('livewire.dropdown-result');
    }
}
