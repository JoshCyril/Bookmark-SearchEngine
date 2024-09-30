<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getAPI()
    {
        // Create a new Guzzle client instance
        $client = new Client();

        // API endpoint
        $apiUrl = "http://host.docker.internal:3000/";

        try {
            // Make a GET request to the OpenWeather API
            $response = $client->get($apiUrl);

            // Get the response body as an array
            $data = json_decode($response->getBody(), true);
            // dd($data);

            // Handle the retrieved weather data as needed (e.g., pass it to a view)
            return view('main', ['data' => $data]);

        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            $data = "in";
            return view('main', ['data' => $data]);
            // return view('api_error', ['error' => $e->getMessage()]);
        }
    }


    // Handle the form submission and API call
    public function index(Request $request)
    {
        $apiBase = "http://localhost:3000";
        $data = null;

        if ($request->isMethod('post')) {

            // API URL (replace with your actual API endpoint)
            $apiUrl = $apiBase."/search/text";
            $user = Auth::user();

            // Call the API with the input data
            $response = Http::post($apiUrl, [
                'query' => $request->input('search_text'),
            ]);

            // Decode the JSON response
            $data = $response->json();
        }

        // Show the form, and if $data exists, display it as well
        return view('/', ['data' => $data]);
    }
}
