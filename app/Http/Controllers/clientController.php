<?php
namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class clientController extends Controller
{
    protected $request;

    protected function submit(ClientRequest $request)
    {
        $this->request = $request;
        $client =new Client();
        $client->name = $this->request->input('name');
        $client->email = $this->request->input('email');
        $client->password = $this->request->input('password');
        $client->file = $this->request->input('file');
        $client->city_id = $this->request->input('city_id');
        $client->car_id = $this->request->input('car_id');
        $client->file = $this->request->file('file');
         $img = $this->request->file('file')->store('images');
//     Storage::putFileAs("files", $img, $request->input('file'));
        $client->save();

    }

    public function create()
    {
        $clients =
            [
                [
                    'name' => 'John',
                    'email' => 'John@gmail.com',
                    'password' => Hash::make('11111111'),
                    'file' => 'Вода.png',
                    'city_id' => '1',
                    'car_id' => '1'
                ],[
                    'name' => 'Ivan',
                    'email' => 'Ivan@gmail.com',
                    'password' => Hash::make('11111111'),
                    'file' => 'Вода.png',
                    'city_id' => '2',
                    'car_id' => '2'
                 ],
            ];
        foreach ($clients as $client) {
          client::create($client);
        }
    }
    public function updateClientsTable()
    {
        $result = DB::update("Update `clients`  set `name` = 'Vlad' where id = 16 ");
    }


    public function getClients()
    {
        $clients = DB::table('clients')->distinct()->select('name','email')->get();
        dump($clients);
    }







}
