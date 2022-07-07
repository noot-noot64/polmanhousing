<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanitarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sanitaries = ['Uitstekend', 'Goed', 'Redelijk', 'Matig', 'Slecht', 'Zeer slecht', 'Nader onderzoek', 'Niet te inspecteren'];
        foreach ($sanitaries as $s){
            DB::table('sanitaries')->insert([
                'name' => $s
            ]);
        }
    }
}
