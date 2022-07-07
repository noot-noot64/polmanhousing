<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facades =
        [
            //Gevels
            'Metselwerk', 'Voegwerk', 'Scheurvorming per gevelvak', 'Gemetselde schoorstenen', 'Waterdichting gem. schoorstenen', 'Gevelstucwerk',
            'Afdichtingen/kitwerk', 'Gevelroosters', 'Schilderwerk gevels', 'Gevelbetimmineringen', 'Schilderwerk gevelbetimmingen',
            //Gevelkozijnen
            'Houtenkozijnen(gk)', 'Houten draaidelen(gk)', 'Kunststof kozijnen(gk)', 'Kunststof draaidelen(gk)', 'Metalenkozijn(gk)', 'Metalen draaidelen(gk)',
            'Voordeur(gk)', 'Achterdeur(gk)', 'Terrasdeur/balkondeur(gk)', 'Beglazing: u-jaar/plaatsingsjaar(gk)', 'Helderheid(gk)', 'Glaslatten en kitwerk(gk)'
        ];
        foreach ($facades as $f){
            DB::table('facades')->insert([
                'name' => $f
            ]);
        }
    }
}
