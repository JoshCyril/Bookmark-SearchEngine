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
        $data = null;  // Initialize data as null

        // // Validate the input
        // $request->validate([
        //     'name' => 'required|string',
        // ]);

        // API URL (you can replace this with the real API endpoint)
        // $apiUrl = "http://host.docker.internal:3000/";

        // $user = Auth::user();

        // // Call the API with the input
        // $response = Http::post($apiUrl, [
        //     // 'user_id' => $user->id,
        //     // 'collection_id' => $request->input('collection_id'),
        //     'query' => $request->input('search_text'),
        // ]);

        // // Decode the JSON response
        // $data = $response->json();

        // Return the view with the API response
        // return view('/', ['data' => $data]);


        // If the request is POST (form submitted)
        if ($request->isMethod('post')) {

            // API URL (replace with your actual API endpoint)
            $apiUrl = "http://host.docker.internal:3000/search";
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
