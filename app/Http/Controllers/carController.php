<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class carController extends Controller
{
    public function create()
    {
        $cars = [
            [
                'carName' => 'Tesla Model X',
                'carPrice' => '100000',
            ],[
                'carName' => 'Lamborghini',
                'carPrice' => '250000',
            ],[
                'carName' => 'Maserati',
                'carPrice' => '100000',
            ],[
                'carName' => 'Ferrari',
                'carPrice' => '400000',
            ],
        ];
        foreach ($cars as $car) {
            Car::create($car);
        }
    }

}
