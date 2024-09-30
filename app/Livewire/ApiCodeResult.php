<?php

namespace App\Livewire;

use Livewire\Component;

class ApiCodeResult extends Component
{
    public $responseData;

    protected $listeners = ['apiCode'];

    public function apiCode($data)
    {
        // Update the component's data with the API response
        $this->responseData = $data;
    }
    public function render()
    {
        return view('livewire.api-code-result');
    }
}
