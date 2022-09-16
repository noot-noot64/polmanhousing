<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conditions = ['Geen beoordeling', 'Uitstekend', 'Goed', 'Redelijk', 'Matig', 'Slecht', 'Zeer slecht', 'Nader onderzoek', 'Niet te inspecteren', 'NVT'];
        foreach ($conditions as $c){
            DB::table('conditions')->insert([
                'name' => $c
            ]);
        }
    }
}
