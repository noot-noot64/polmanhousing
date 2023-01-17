<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'robpolman',
            'email' => 'rob@wincloud.com',
            'password' => Hash::make('rpolman1203@'),
            'phonenumber' => '0637348970',
            'created_at' => date('Y-m-d'),
        ]);
        DB::table('users')->insert([
            'username' => 'barendpolman',
            'email' => 'barend@polmanvgb.nl',
            'password' => Hash::make('bpolman120123@'),
            'phonenumber' => '0612345678',
            'created_at' => date('Y-m-d'),
        ]);
    }
}
