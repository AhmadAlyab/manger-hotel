<?php 
namespace App\Repositry;

use App\Models\Degeer;
use App\Models\Room;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositry\RoomRepositryI;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class RoomRepositry implements RoomRepositryI{
    // return list rooms
    public function room(){
        return Room::all();
    }
    // return list degeeres in hotel
    public function degeer(){
        return Degeer::all();
    }
    // store new room in hotel
    public function store($request){
        Room::create([
            'numder_room' => $request->numder_room,
            'degeer_id'   => $request->degeer_id,
            'note'        => $request->note,
        ]);
        
    }
    // update room in hotel
    public function update($request){
        $room = Room::findOrFail($request->id);
        $room->update([
            'numder_room' => $request->numder_room,
            'degeer_id'   => $request->degeer_id,
            'note'        => $request->note,
        ]);
    }
    // delete room
    public function delete($request){
        $room = Room::findOrFail($request->id)->delete();
    }
}