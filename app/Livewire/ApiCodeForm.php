<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class ApiCodeForm extends Component
{
    public $search_code;
    public $colAuth;

    public function save()
    {
        $this->dispatch('apiSave', $this->search_code);
    }

    public function submit()
    {

        // API URL
        $apiBase = "http://host.docker.internal:3000";
        $apiUrl = $apiBase.'/search/code';

        // Call the API
        $response = Http::post($apiUrl, [
            'query' => $this->search_code,
            'coll' => $this->colAuth,
            'count' => 4,
        ]);

        $responseData = [];

        $result = $response->json();

        foreach ($result['ids'][0] as $index => $id) {
            $responseData[] = [
                "ids" => $id,
                "distances" => $result['distances'][0][$index],
                "metadatas" => $result['metadatas'][0][$index],
                "documents" => $result['documents'][0][$index]
            ];
        }

        // @dd($responseData);

        // Emit the result to the Result component
        $this->dispatch('apiCode', $responseData);
    }

    public function render()
    {
        return view('livewire.api-code-form');
    }
}
