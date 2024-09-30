<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Livewire\DropdownComponent;

class HomeController extends Controller
{
    public $collVal;

    public function __invoke(Request $request)
    {
        return view('home');
    }

    public function index()
    {
        // if (Auth::check()){
        //     $cl = new DropdownComponent();
        //     $cl->render();
        // }

        // $data = [
        //     [0.30, 0.53],
        //     [-1.45, -0.14],
        //     [0.95, 0.69],
        //     [0.10, 0.37],
        //     [0.10, -0.12]
        // ];
        return view('home');

    }

}
