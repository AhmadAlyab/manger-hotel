<?php 
namespace App\Repositry;

use App\Models\Client;
use App\Models\Gender;
use App\Models\Room;
use App\Repositry\ClientRepositryI;
use Illuminate\Support\Facades\Hash;

class ClientRepositry implements ClientRepositryI{
    // list clients
    public function client(){
        return Client::all();
    }
    // list genders
    public function gender(){
        return Gender::all();
    }
    // list rooms
    public function room(){
        return Room::all();
    }
    // store new client
    public function store($request){
        $price = Room::where('id',$request->number_room)->first();
        Client::create([
            'email'        => $request->email,
            'password'     => Hash::make($request->password),
            'name'         => $request->name,
            'number_phone' => $request->number,
            'gender_id'    => $request->gender,
            'address'      => $request->addrees,
            'room_id'      => $request->number_room,
            'paid'         => 0,
            'dues'         => $price->degeer->price
        ]);
    }
    // edit client
    public function edit($id){
        $data['rooms'] = Room::all();
        $data['genders'] = Gender::all();
        $data['client'] = Client::findOrFail($id);
        return $data;
    }
    // update client
    public function update($request){
        $client = Client::findOrFail($request->id);
        $client->update([
            'name' => $request->name,
            'number_phone'   => $request->number,
            'gender_id'        => $request->gender,
            'address'   => $request->addrees,
            'room_id'   => $request->number_room,
        ]);
    }
    // delete client
    public function delete($request){
        Client::findOrFail($request->id)->delete();
    }
}