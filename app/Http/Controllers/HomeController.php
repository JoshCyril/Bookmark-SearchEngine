<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function __invoke(Request $request)
    {
        return view('home');
    }

    public function index()
    {
        return view('home');
    }


    public function processSelect(Request $request)
    {
        $selectedValue = $request->input('selected');
        // Process the selected value and return a response
        return response()->json(['message' => 'You selected: ' . $selectedValue]);
    }

}
