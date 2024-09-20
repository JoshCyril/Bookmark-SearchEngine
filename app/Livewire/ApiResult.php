<?php

namespace App\Livewire;

use Livewire\Component;

class ApiResult extends Component
{
    public $responseData;

    protected $listeners = ['apiResponseReceived'];

    public function apiResponseReceived($data)
    {
        // Update the component's data with the API response
        $this->responseData = $data;
    }

    public function render()
    {
        return view('livewire.api-result');
    }
}
