<?php

namespace Database\Seeders;

use App\Models\Degeer;
use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->delete();
        $rooms = [
            '301', '302', '304'
        ];
        $deeger = Degeer::where('number','1')->first();
        foreach ( $rooms as $room ){
            Room::create([
                'numder_room' => $room,
                'degeer_id'   => $deeger->id
            ]);
        }
    }
}
