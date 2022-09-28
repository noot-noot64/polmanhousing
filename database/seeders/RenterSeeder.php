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
        $renters = array(
            array('initials' => 'M van', 'lastname' => 'Haren', 'email' => 'marlonvanharen@orange.nl', 'phonenumber' => '06-27201891'),
            array('initials' => 'P. J. M.', 'lastname' => 'Koekkoek', 'email' => 'p.koekkoek@ehr.nl', 'phonenumber' => '06-21515776'),
            array('initials' => 'G. W. M.', 'lastname' => 'Beke - van Ooyen', 'email' => 'trudyvanooijen@live.nl', 'phonenumber' => '026-4432209'),
            array('initials' => 'S.', 'lastname' => 'Bol', 'email' => 'sanderbol@hotmail.com', 'phonenumber' => '06-43187623/026-3511911'),
            array('initials' => 'M.A.P. Smeets/ ', 'lastname' => 'E.P.A. Plónes', 'email' => 'mapsmeets@hotmail.com', 'phonenumber' => '06-47416572'),
            array('initials' => 'E. K. J.', 'lastname' => 'Blauw', 'email' => 'karla.blauw@hetnet.nl', 'phonenumber' => '026-3513873'),
            array('initials' => 'C. van', 'lastname' => 'Tienen', 'email' => 'vantienen@yahoo.com', 'phonenumber' => '06-47226273'),
            array('initials' => 'M.Kamphuis', 'lastname' => 'F. Gijlstra', 'email' => 'frederike16@upcmail.nl', 'phonenumber' => '026-4436112'),
            array('initials' => 'M. de Grauw/', 'lastname' => 'H. Nijhof', 'email' => 'heleen.en.mark@chello.nl', 'phonenumber' => '06-22401263'),
            array('initials' => 'A. W.', 'lastname' => 'Wolf', 'email' => 'leeg', 'phonenumber' => '026-3511089'),
            array('initials' => 'B. M. van den', 'lastname' => 'Hoven-Labbé', 'email' => 'lauralabbe@gmail.com', 'phonenumber' => '06-46141445'),
            array('initials' => 'W.', 'lastname' => 'Jacobsen- Schanzleh', 'email' => 'w.jacobsen3@upcmail.nl', 'phonenumber' => '026-4422325'),
            array('initials' => 'F.S.S. Groeneveld', 'lastname' => 'T. Molendijk', 'email' => 'tjitskemolendijk@hotmail.com', 'phonenumber' => '06-50233086'),
            array('initials' => 'E.', 'lastname' => 'Arentsen', 'email' => 'leeg', 'phonenumber' => '026-4452559'),
            array('initials' => 'M.', 'lastname' => 'Elfferich – Bronkhorst', 'email' => 'mike.elfferich@live.nl', 'phonenumber' => '026-4425548'),
            array('initials' => 'F. J. Miedema', 'lastname' => 'W.van Zuilekom', 'email' => 'fredaumiedema@zonnet.nl', 'phonenumber' => '026-4456184'),
            array('initials' => 'T. van Buul', 'lastname' => 'A. Jepma', 'email' => 'anneke@jepma-tuinontwerp.nl', 'phonenumber' => '06-29043088'),
            array('initials' => 'G. J. M.', 'lastname' => 'Gerritsen – Kroekenstoel', 'email' => 'gerritsen@compaqnet.nl', 'phonenumber' => '026-4421889/06-53369393'),
            array('initials' => 'B.', 'lastname' => 'Roelofs', 'email' => 'b.roelofs34@chello.nl', 'phonenumber' => '026-4423813'),
            array('initials' => 'M.', 'lastname' => 'Hoeve-van der Berg', 'email' => 'markhoeve@tele2.nl', 'phonenumber' => '06-22126653'),
            array('initials' => 'M. W. M.', 'lastname' => 'Hell – Thomassen', 'email' => 'j.tomassen96@chello.nl', 'phonenumber' => '026-4453378/06-30621426'),
            array('initials' => 'M. E. Leussink/ ', 'lastname' => 'G. J. Robleto', 'email' => 'maaikecorazon@hotmail.com', 'phonenumber' => '026-4456934'),
            array('initials' => 'L.', 'lastname' => 'Steenmetser', 'email' => 'c.steenmetser@gmail.com', 'phonenumber' => '026-3817996/06-15601122'),
            array('initials' => 'B. Groenewegen/', 'lastname' => 'T. van Kooten Niekerk', 'email' => 'tenarvkn@hotmail.com', 'phonenumber' => '06-29513378'),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),
            array('initials' => '', 'lastname' => '', 'email' => '', 'phonenumber' => ''),



        );
    }
}
