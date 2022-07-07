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
        $installations =
        [
            //Installaties - meterkast
            'Gasmeter(locatie en ventilatie', 'Watermeter(locatie)', 'Elektrameter(locatie)',
            'Aantal groepen(foto)', 'Voorzieningen CAI etc.',
            //Installaties - gas
            'CV-ketel type en jaartal', 'Warmwatervoorziening', 'Keukenaansluiting', 'Warmteafgifte systeem', 'Radiotoren/ruimte aangeven(tekening)',
            //Installaties - ventilatie
            'Type ventilatiesysteem', 'Ventilatie unit onderhoud', 'Ventilatiekanalen onderhoud',
            //Installaties - electra
            'Schakelmateriaal/ruimte', 'Internet/CAI per ruimte'
        ];
        foreach ($installations as $i){
            DB::table('installations')->insert([
                'name' => $i
            ]);
        }
    }
}
