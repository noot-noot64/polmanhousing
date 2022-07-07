<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $externs =
        [
            'Voorpaden', 'Achterpaden', 'Terras achterzijde', 'Tuininrichting', 'Boomonderhoud',
            'Struiken en Hagen', 'Hekwerken', 'Buitenkraan', 'Buitenriool tot gemeenteaansluiting'
        ];
        foreach ($externs as $e){
            DB::table('externs')->insert([
                'name' => $e
            ]);
        }
    }
}
