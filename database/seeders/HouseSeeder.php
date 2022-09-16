<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('houses')->insert([
            'address' => 'Tasveld 2',
            'city' => 'Tolkamer',
            'postalcode' => '6916 LM',
            'buildyear' => '2000',
            'surface' => '220',
            'accessible' => true,
            'condition_id' => '2',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
    }
}
