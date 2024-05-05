<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('places')->delete();
        $places = [
            'lounge', 'room', 'kitchen'
        ];
        foreach ( $places as $place ){
            Place::create([
                'name' => $place
            ]);
        }
    }
}
