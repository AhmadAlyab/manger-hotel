<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specializations')->delete();
        $specializations = [
            'respetions', 'waiters', 'cooks', 'accounts'
        ];
        foreach ( $specializations as $specialization ){
            Specialization::create([
                'name' => $specialization
            ]);
        }
    }
}
