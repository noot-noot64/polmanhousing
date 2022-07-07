<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanitarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sanitaries =
        [
            //Sanitair - toiletruimte
            'Vloertegels', 'Wandtegels', 'Stucwerk boven tegels', 'Watercloset(vrijhangend/AO/PK)', 'Stortbak/waterreservoir',
            'Fontijn', 'Fontijnkraan', 'Ventilatie wc-ruimte', 'Kitwerk toiletruimte',
            //Sanitair - keuken
            'Aanrecht(plaatsingsjaar)', 'Onderkasten met deuren', 'Bovenkasten met deuren', 'Aanrechtblad',
            'Keukenkraan', 'Afzuigkap(directe afvoer/recirculatie)', 'Afzuigkap(centraal of WTW-unit)',
            'Elektrische koopplaat(inductie)', 'Tegelwerk boven aanrecht/keuken', 'Kitwerk aanrecht en tegelwerk',
            'Vloerafwerking(mits eenvoud)',
            //Sanitair - badkamer
            'Wastafel/wastafelmeubel', 'Wastafelmengkraan', 'Douchekraan met garnituur', 'Douchebak', 'Doucheafvoer',
            'Ventilatie doucheruimte', 'Vloertegels', 'Voegwerk vloertegels', 'Wandtegels', 'Voegwerk wandtegels', 'Kitwerk badkamer'
        ];
        foreach ($sanitaries as $s){
            DB::table('sanitaries')->insert([
                'name' => $s
            ]);
        }
    }
}
