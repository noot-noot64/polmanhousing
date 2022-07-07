<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubstructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $substructures =
        [
            'Fundatie', 'Kelder', 'Kruipruimte', 'Ventilatie kelder/kruipruimte',
            'Houtenbalklaag', 'Vloerdelen', 'Systeemvloer', 'Afwerksysteem systeemvloer'
        ];
        foreach ($substructures as $su){
            DB::table('substructures')->insert([
                'name' => $su
            ]);
        }
    }
}
