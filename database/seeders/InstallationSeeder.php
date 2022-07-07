<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstallationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $installations = ['Uitstekend', 'Goed', 'Redelijk', 'Matig', 'Slecht', 'Zeer slecht', 'Nader onderzoek', 'Niet te inspecteren'];
        foreach ($installations as $i){
            DB::table('installations')->insert([
                'name' => $i
            ]);
        }
    }
}
