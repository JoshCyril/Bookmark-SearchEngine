<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;


class DropdownComponent extends Component
{
    public $selectedValue;

    public function change()
    {
        $this->dispatch('dropdownResponseReceived', $this->selectedValue);
    }

    public function mount()
    {
        // // Initialize the selectedValue from the session if available
        // $this->selectedValue = Session::get('dropdown_value', '');
        // $this->updatedSelectedValue($this->selectedValue);

        $this->dispatch('dropdownResponseReceived', $this->selectedValue);
    }

    // public function updatedSelectedValue($value)
    // {
    //     // Store the selected value in the session whenever it changes
    //     Session::put('dropdown_value', $value);
    // }

    public function render()
    {
        return view('livewire.dropdown-component');
    }
}
