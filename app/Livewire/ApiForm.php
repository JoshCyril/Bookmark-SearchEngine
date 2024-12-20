<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class ApiForm extends Component
{
    public $search_text;
    public $response;
    public $colAuth;

    public function submit()
    {

        // API URL
        $apiBase = "http://host.docker.internal:3000";
        $apiUrl = $apiBase.'/search/text';
        // $colVal = config('coll.col_val');
        // // $colAuth = "E". Auth::id() . "c" . $colVal;
        // $colAuth = "E1c3";

        // Call the API

        // @dd($this->colAuth);
        $response = Http::post($apiUrl, [
            'query' => $this->search_text,
            'coll' => $this->colAuth,
            'count' => 4,
        ]);



        $responseData = [];

        $result = $response->json();

        // @dd($result);

        foreach ($result['ids'][0] as $index => $id) {
            $responseData[] = [
                "ids" => $id,
                "distances" => $result['distances'][0][$index],
                "metadatas" => $result['metadatas'][0][$index],
                "documents" => $result['documents'][0][$index]
            ];
        }



        // Emit the result to the Result component
        $this->dispatch('apiResponseReceived', $responseData);
    }

    public function render()
    {
        return view('livewire.api-form');
    }
}
