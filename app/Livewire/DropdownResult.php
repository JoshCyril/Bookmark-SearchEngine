<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class DropdownResult extends Component
{
    public $selectedValue;
    public $url_count;
    public $collection;
    public $isEmbedded;
    public $colAuth;
    public $resUrl;
    public $status;
    public $statusC;

    protected $listeners = ['dropdownResponseReceived'];

    public function dropdownResponseReceived($data)
    {
        $this->statusC = 0;
        // Update the component's data with the API response
        // Config::set('coll.col_val', $this->selectedValue);
        $this->selectedValue = $data;
        $this->url_count = DB::table('urls')
                            ->where([
                                ['collection_id', '=', $data],
                                ['user_id', '=', Auth::id()]
                            ])->count();
        $this->collection = DB::table('collections')
                                ->where('id', '=', $data)->first();


        // API URL
        $apiBase = "http://host.docker.internal:3000";
        $apiUrl = $apiBase.'/check';
        $colVal = config('coll.col_val');
        $this->colAuth = "E". Auth::id() . "c" . $data;

        // Call the API
        $response = Http::post($apiUrl, [
            'coll' => $this->colAuth,
        ]);


        $result = $response->json();

        $this->isEmbedded = $result;
    }

    public function submit(){
        // ===================== API - Web Scrapping
        $this->statusC = 0;
        $apiBase = "http://host.docker.internal:3000";
        $apiUrl = $apiBase.'/c/scrapping';
        $this->colAuth = "E". Auth::id() . "c" . $this->selectedValue;
        $totalurl =array(null);
        $ctrUrls = DB::table('urls')
                            ->where([
                                ['collection_id', '=', $this->selectedValue],
                                ['user_id', '=', Auth::id()]
                            ])->get();
        // foreach ($ctrUrls as $cu){
        //     array_push($totalurl, $cu->url);
        //     }


        // $response = Http::post($apiUrl, $totalurl);
        // $this->status = $response->json();
        // $this->statusC = 1;

        // ===================== API - Create embeddings
        $apiUrl = $apiBase.'/c/embedding';
        $response = Http::post($apiUrl, [
            'coll' => $this->colAuth,
        ]);
        $this->status = $response->json();
        // @dd($this->status);

        $this->statusC = 2;



        // ===================== API - Check embeddings
        $apiUrl = $apiBase.'/check';
        $response = Http::post($apiUrl, [
            'coll' => $this->colAuth,
        ]);


        $result = $response->json();

        $this->isEmbedded = $result;

    }


    public function render()
    {
        return view('livewire.dropdown-result');
    }
}
