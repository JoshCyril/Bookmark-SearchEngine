<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            return view('welcome', ['data' => $data]);

        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            $data = "in";
            return view('welcome', ['data' => $data]);
            // return view('api_error', ['error' => $e->getMessage()]);
        }
    }
}
