<?php

namespace App\Livewire;

use Livewire\Component;

class ApiCodeSave extends Component
{
    public $responseData;

    protected $listeners = ['apiSave'];

    public function apiSave($data)
    {
        // Update the component's data with the API response
        $this->responseData = $data;
    }
    public function render()
    {
        return view('livewire.api-code-save');
    }
}
