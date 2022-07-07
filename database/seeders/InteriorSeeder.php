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
        $interiors =
        [
            //Interieur - algemeen
            'Wandafwerking(behang of stucwerk)', 'Plafondafwerking(stucwerk)', 'Schilderwerk', 'Binnendeuren en kozijnen(O-ABC)',
            'Binnenwerk buitenkozijnen(O-ABC)', 'Trap 1ste verd.(incl. leuning en traprek)', 'Trap 2de verd.(incl. leuning en traprek)',
            'Vlisotrap(vaste zoldertrap)'
        ];
        foreach ($interiors as $it){
            DB::table('interiors')->insert([
                'name' => $it
            ]);
        }
    }
}
