<?php

namespace Database\Seeders;

use App\Models\Degeer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('degeers')->delete();
        $degeers=[ ['1',1000] , ['2',500] , ['3',250] ];
        foreach ( $degeers as $degeer ) {
            Degeer::create([
                'number' => $degeer[0],
                'price'  => $degeer[1]
            ]);
        }
    }
}
