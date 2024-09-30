<?php

namespace App\Livewire;

use Livewire\Component;

class ApiImgResult extends Component
{
    public $responseData;

    protected $listeners = ['apiReceivedImg'];

    public function apiReceivedImg($data)
    {
        // Update the component's data with the API response
        $this->responseData = $data;
    }
    public function render()
    {
        return view('livewire.api-img-result');
    }
}
