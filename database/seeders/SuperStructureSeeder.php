<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superstructures =
        [
            //Constructieve binnenwanden
            'Begane grond(cb)', '1ste verdieping(cb)', '2ste verdieping(zolder)(cb)', '3de verdieping(cb)', 'Begane grond(ls)',
            //Lichte scheidingswanden
            '1ste verdieping(ls)', '2de verdieping(ls)', '3de verdieping(ls)', 'Binnendeurkozijnen(ls)', 'Binnendeuren(ls)',
            //Verdiepings vloeren - 1ste verdieping
            'Houtenbalklaag(1vv)', 'Vloerdelen(1vv)', 'Systeemvloer(1vv)', 'Afwerkvloer systeemvloer(1vv)', 'Binnendeurkozijnen(1vv)', 'Binnendeuren(1vv)',
            //Verdiepings vloeren - 2de verdieping
            'Houtenbalklaag(2vv)', 'Vloerdelen(2vv)', 'Systeemvloer(2vv)', 'Afwerkvloer systeemvloer(2vv)', 'Binnendeurkozijnen(2vv)', 'Binnendeuren(2vv)',
            //Verdiepings vloeren - 3de verdieping
            'Houtenbalklaag(3vv)', 'Vloerdelen(3vv)', 'Systeemvloer(3vv)', 'Afwerkvloer systeemvloer(3vv)', 'Binnendeurkozijnen(3vv)', 'Binnendeuren(3vv)',
            //Verdiepings vloeren - dakvloer
            'Houtenbalklaag(dv)', 'Vloerdelen(dv)', 'Systeemvloer(dv)', 'Afwerkvloer systeemvloer(dv)', 'Isolatiewaarde(dv)', 'Dakbedekking(dv)', 'Dakdoorvoeraansluitingen(dv)',
            //Verdiepings vloeren - hellende daken
            'Balklaag(hd)', 'Dakbeschot(hd)', 'Isolatiewaarde(hd)', 'Pannendak(hd)', 'HWA afvoeren(hd)', 'Aansluitingen op HWA(hd)', 'Dakgoten(hd)'
        ];
        foreach ($superstructures as $sup){
            DB::table('superstructures')->insert([
                'name' => $sup
            ]);
        }
    }
}
