<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('renters')->insert([
            'firstname' => 'robert',
            'email' => 'robertpolman1217@gmail.com',
            'password' => Hash::make('welkom01'),
            'phonenumber' => '0637040676',
            'created_at' => date('Y-m-d'),
        ]);
    }
}
