<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ApiForm extends Component
{
    public $search_text;
    public $response;

    public function submit()
    {

        // API URL
        $apiUrl = 'http://host.docker.internal:3000/search';

        // Call the API
        $response = Http::post($apiUrl, [
            'query' => $this->search_text,
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
        $this->dispatch('apiResponseReceived', $responseData);
    }

    public function render()
    {
        return view('livewire.api-form');
    }
}
