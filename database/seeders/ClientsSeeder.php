<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\City;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('Insert into clients (name, email, password, file, city_id, car_id) values (?,?,?,?,?,?)',['Vlad','Vlad@gmail.com','11111111','img.jpg','1','1']);

        DB::table('cars')->insert(
            [
                [
                   'carName' => 'BMW 5',
                    'carPrice' => '100000',
                ]
            ]
        );
        Car::create(
            [
                'carName' => 'Mercedes',
                'carPrice' => '400000',
            ]
        );
        City::create(
            [
                'city_name' => 'Odessa'
            ]
        );
    }
}
