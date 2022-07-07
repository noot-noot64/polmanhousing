<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call
       ([
           ConditionSeeder::class ,HouseSeeder::class, ExternSeeder::class, SubstructureSeeder::class,
           SuperStructureSeeder::class, FacadeSeeder::class, InteriorSeeder::class, SanitarySeeder::class,
           InstallationSeeder::class, UserSeeder::class
       ]);
    }
}
