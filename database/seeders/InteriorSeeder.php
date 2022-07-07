<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InteriorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interiors = ['Uitstekend', 'Goed', 'Redelijk', 'Matig', 'Slecht', 'Zeer slecht', 'Nader onderzoek', 'Niet te inspecteren'];
        foreach ($interiors as $it){
            DB::table('interiors')->insert([
                'name' => $it
            ]);
        }
    }
}
