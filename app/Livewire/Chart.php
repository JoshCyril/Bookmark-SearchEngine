<?php

namespace App\Livewire;

use Livewire\Component;

class Chart extends Component
{

    // public $data = [
    //     'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    //     'datasets' => [
    //         [
    //             'label' => 'Sales',
    //             'backgroundColor' => '#f87979',
    //             'data' => [12, 19, 3, 5, 2, 3, 11],
    //         ]
    //     ]
    // ];

    public $data = [
        [0.30, 0.53],
        [-1.45, -0.14],
        [0.95, 0.69],
        [0.10, 0.37],
        [0.10, -0.12]
    ];


    public function render()
    {
        // $gdata = [
        //     [0.30, 0.53],
        //     [-1.45, -0.14],
        //     [0.95, 0.69],
        //     [0.10, 0.37],
        //     [0.10, -0.12]
        // ];
        return view('livewire.chart');
    }
}
