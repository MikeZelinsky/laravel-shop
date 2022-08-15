<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;

class cityController extends Controller
{
   public function create()
   {
       $cities =[
           [
             'city_name' => 'Odessa',
           ],[
             'city_name' => 'Kyiv',
           ],[
             'city_name' => 'Lviv',
           ],
       ];
       foreach ($cities as $city) {
           city::create($city);
       }
   }
}
