<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            array('initials' => 'P. H.', 'lastname' => 'Broersen - van Megen', 'email' => 'pmbroersen@gmail.com', 'phonenumber' => ''),
            array("initials"=>"H. A. T. M.","lastname"=>"Hoogeland - Slot","email"=>"h.hoogeland@planet.nl","phonenumber"=>"026- 4454452"),
            array("initials"=>"J. H. Ferman/","lastname"=>"C. Smit","email"=>"corasmit@gmail.com","phonenumber"=>"026- 4454287/06-13540154"),
            array("initials"=>"W.","lastname"=>"Jansen","email"=>"helma@heselbergh.nl","phonenumber"=>"026- 4462257"),
            array("initials"=>"C. R. Clark/","lastname"=>"M. Clark- Frankort","email"=>"clarkeurope@gmail.com","phonenumber"=>"06-52300002"),
            array("initials"=>"M. H. de","lastname"=>"Lange","email"=>"rinieenrien@hotmail.com","phonenumber"=>"026- 4455363"),
            array("initials"=>"E. J. Th. van","lastname"=>"Onzen","email"=>"berry@vanonzen.nl","phonenumber"=>"026- 4432968"),
            array("initials"=>"V.P. Preijers","lastname"=>"M.R. Tränkle","email"=>"2michir@gmx.de","phonenumber"=>"06-52138440"),
            array("initials"=>"M. R. M. van der","lastname"=>"Sande - Beltman","email"=>"joke.b@planet.nl","phonenumber"=>"026- 4461626/06-255781184"),
            array("initials"=>"H. D.","lastname"=>"Doekhi - Rasoelbaks","email"=>"doekhi@zonnet.nl","phonenumber"=>"026- 4459547"),
            array("initials"=>"J.M.","lastname"=>"Stallen","email"=>"hans.stallen@gmail.com","phonenumber"=>"06-22798819"),
            array("initials"=>"K. van Drie/","lastname"=>"G. Aarntzen","email"=>"geeskea@hotmail.com","phonenumber"=>"06-38552734"),
            array("initials"=>"A.","lastname"=>"Philips - Bisseling","email"=>"","phonenumber"=>"026- 4435602"),
            array("initials"=>"A.R. Scholten","lastname"=>"F. de Jong","email"=>"froukje1@gmail.com","phonenumber"=>"06-27281933"),
            array("initials"=>"H. P. de","lastname"=>"Zeeuw- Rossenberg","email"=>"christelrossenberg@hotmail.com","phonenumber"=>"026- 3217457"),
            array("initials"=>"T. van Roggen/","lastname"=>"P. Gargoski","email"=>"tristanvanroggen@yahoo.com; gargoski@yahoo.com","phonenumber"=>"06-44970714"),
            array("initials"=>"S. M. Leyden","lastname"=>"/W. van der Meij","email"=>"wilvdmeij@gmail.com","phonenumber"=>"06-47756190/026-68480100"),
            array("initials"=>"P. J. Brakenhoff/","lastname"=>"I.E. H.van Kleef","email"=>"pjbrakenhoff@gmail.com","phonenumber"=>"06-20076737"),
            array("initials"=>"G.","lastname"=>"Bolder","email"=>"g.bolder.xy@chello.nl","phonenumber"=>"06-25381638"),
            array("initials"=>"M. L. D. Gylstra","lastname"=>"S. L. van der Lee","email"=>"Marcogylstra@cs.com","phonenumber"=>"026- 3517139"),
            array("initials"=>"K. ","lastname"=>"Schwarts","email"=>"k.schwarts1@kpnplanet.nl","phonenumber"=>"06-33706350/026-4451524"),
            array("initials"=>"R. A.","lastname"=>"Koolmees","email"=>"","phonenumber"=>"026- 4435770"),
            array("initials"=>"A. M. C. van der","lastname"=>"Zon","email"=>"a.vanderzon@chello.nl","phonenumber"=>"026- 4433561"),
            array("initials"=>"H. J.","lastname"=>"Niekus","email"=>"","phonenumber"=>"026- 4451967"),
            array("initials"=>"S. C. J. ","lastname"=>"Stienstra","email"=>"","phonenumber"=>"026- 4434730/06-55102430"),
            array("initials"=>"M. Valk/","lastname"=>"M. Stege","email"=>"mgstege@gmail.com","phonenumber"=>"026- 4428087/0630479927"),
            array("initials"=>"C. G. P. van","lastname"=>"Osch","email"=>"kerstin_van_osch@hotmail.com","phonenumber"=>"06-34275528"),
            array("initials"=>"R.","lastname"=>"de Roo","email"=>"a-feenstra1@tele2.nl","phonenumber"=>"026- 4431031 "),
            array("initials"=>"R.","lastname"=>"Jelijs","email"=>"dinyjelijs@gmail.com","phonenumber"=>"026- 4426158/06-40758664"),
            array("initials"=>"A.M.T.","lastname"=>"Berris-de Vries","email"=>"berris@zonnet.nl","phonenumber"=>"026- 4451676"),
            array("initials"=>"R. van den Bogaard/","lastname"=>"M. Wagener","email"=>"marjonw@online.nl","phonenumber"=>"026- 4457990"),
            array("initials"=>"W. van Laar/","lastname"=>"S. Tempel","email"=>"s.tempel@chello.nl","phonenumber"=>"026-4462426"),
            array("initials"=>"J. B. A. van","lastname"=>"Dalen - Hergarden","email"=>"j.dalenhergarden@upcmail.nl","phonenumber"=>"026- 4437749/06-19259393"),
            array("initials"=>"J. H.","lastname"=>"Gietema","email"=>"jhgietema@hotmail.com","phonenumber"=>"026-4420645/06-23340457"),
            array("initials"=>"H. A.","lastname"=>"Gefferie","email"=>"hagefferie@hotmail.com","phonenumber"=>"026- 3700248"),
            array("initials"=>"G. P.","lastname"=>"Timmermans","email"=>"timmermans.gp@gmail.com","phonenumber"=>"026- 4422257/0657858874"),
            array("initials"=>"J. J.","lastname"=>"Kempkens","email"=>"","phonenumber"=>"026- 4450862"),
            array("initials"=>"J. M.","lastname"=>"Ambachtsheer","email"=>"jenny.ambachtsheer@gmail.com","phonenumber"=>"026- 8480444/06-18765043"),
            array("initials"=>"M. Kuypers","lastname"=>"A.Postma","email"=>"im@marckuypers.nl","phonenumber"=>"06-53572718"),
            array("initials"=>"M. Reijerman/","lastname"=>"M. Mink","email"=>"marminkman@planet.nl","phonenumber"=>" "),
            array("initials"=>"P. H. van","lastname"=>"Snippenburg","email"=>"p.snippenburg6@upcmail.nl","phonenumber"=>"026- 4454135"),
            array("initials"=>"M.Kamstra-","lastname"=>"van Uem","email"=>"corinna.art@gmail.com","phonenumber"=>"06-21851137/06-26988533"),
            array("initials"=>"P.H.M. de Groot/","lastname"=>"S.E. Boschma","email"=>"sarahboschma@hotmail.com","phonenumber"=>"06-14236919"),
            array("initials"=>"H. C. A. M.  van Eijndhoven-","lastname"=>"Kiezebrink","email"=>"h.vaneijndhoven@hotmail.com","phonenumber"=>"026- 3703740/0630711988"),
            array("initials"=>"H. M. L.","lastname"=>"Berensen","email"=>"hmlberensen@hotmail.nl","phonenumber"=>"026- 4452898"),
            array("initials"=>"Wisselwoning na renovatie","lastname"=>"","email"=>"","phonenumber"=>""),
            array("initials"=>"R. Vonk/ M.","lastname"=>"Post","email"=>"r.vonk18@chello.nl","phonenumber"=>"026-4453605 / 06-10902088"),
            array("initials"=>"M. E. M.","lastname"=>"Löwenthal - Polman","email"=>"Marcelwilma@upcmail.nl","phonenumber"=>"026- 4452197"),
            array("initials"=>"A. J. M. de","lastname"=>"Vries – Tiekstra","email"=>"andreedevries@telfort.nl","phonenumber"=>"026- 4426168"),
            array("initials"=>"A. Verhoef/ P. van der ","lastname"=>"Schoot","email"=>"a.verhoef259@upcmail.nl","phonenumber"=>"026- 4434428"),
            array("initials"=>"Th. E. M.","lastname"=>"Bosman – Voss","email"=>"doortjevoss@live.nl","phonenumber"=>"026- 4425112"),
            array("initials"=>"J. van Elferen/","lastname"=>"L. Tolmeijer","email"=>"loes-tolmeijer@hotmail.com","phonenumber"=>"06-51384764"),
            array("initials"=>"K. J.","lastname"=>"Markus","email"=>"","phonenumber"=>"026-4421475"),
            array("initials"=>"G. J. ","lastname"=>"Grosman","email"=>"grosm007@planet.nl","phonenumber"=>"026-4438424"),
            array("initials"=>"leegstand wordt wisselwoning","lastname"=>"","email"=>"","phonenumber"=>""),
            array("initials"=>"S. van","lastname"=>"Deelen","email"=>"svdeelen@gmail.com","phonenumber"=>"06-23416753/026-7370338"),
            array("initials"=>"W. M.","lastname"=>"Meijer - Jacobs","email"=>"","phonenumber"=>"026- 4437033"),
            array("initials"=>"M. S. A. ","lastname"=>"Bierlaagh","email"=>"mbierlaagh@kpnplanet.nl","phonenumber"=>"026- 4433236/06-10571588"),
            array("initials"=>"A. J. J. Broeksteeg-","lastname"=>"IJsseldijk","email"=>"a.broeksteeg@upcmail.nl","phonenumber"=>"06-15234907"),
            array("initials"=>"A.","lastname"=>"Meijer","email"=>"benj@7meijers.nl","phonenumber"=>"026- 4434925"),
            array("initials"=>"C. T. H. G.","lastname"=>"Hermsen -  Koster","email"=>"zand.loper@ziggo.nl","phonenumber"=>"026- 4450369 "),
            array("initials"=>"R.","lastname"=>"Puzzo - Cornelese","email"=>"loespuzzo@gmail.com","phonenumber"=>"026- 4423951/06-40674966"),
            array("initials"=>"M. van Kampen/","lastname"=>"D. Direr","email"=>"verlorenwoorden@gmail.com","phonenumber"=>"026-3216234/06-17351954"),
            array("initials"=>"G.","lastname"=>"Evers - Sanders","email"=>"c.evers10@chello.nl","phonenumber"=>"026- 4423191"),
            array("initials"=>"M. van den","lastname"=>"Berg - Dekkers","email"=>"","phonenumber"=>"026- 3512865"),
            array("initials"=>"J. J. P. Westen/","lastname"=>"","email"=>"JeroenWesten@hotmail.com","phonenumber"=>"06-18067183"),
            array("initials"=>"A.A.M. van den Heuvel","lastname"=>"A.P. Bockting","email"=>"angelavandenheuvel_1@msn.com","phonenumber"=>"06-23600882"),
            array("initials"=>"K. Vermijs/","lastname"=>"K. van Persie","email"=>"kaboul@kaboul.nl; <kiki@kikivanpersie.com>","phonenumber"=>"06-29098414"),
            array("initials"=>"E.","lastname"=>"Bertholet","email"=>"bertholetester@hotmail.com","phonenumber"=>"06-10569044"),
            array("initials"=>"R. Schippers/","lastname"=>"J. B. van Rhee","email"=>"jolandavanrhee@upcmail.nl","phonenumber"=>"026- 4421319/06-44062976"),
            array("initials"=>"M.A. ","lastname"=>"Santing","email"=>"Marijesanting@hotmail.com","phonenumber"=>"06-12097498"),
            array("initials"=>"P. F. H.","lastname"=>"Welling - Visser","email"=>"paulwelling@xs4all.nl","phonenumber"=>"026- 4435949"),
            array("initials"=>"I. ","lastname"=>"Vastenholt - Ruizendaal","email"=>"m.vastenholt@xs4all.nl","phonenumber"=>""),
            array("initials"=>"H. ","lastname"=>"de Booys- Banks","email"=>"hdebooys@chello.nl","phonenumber"=>"026-3831888 "),
            array("initials"=>"E. G. J. van Elk/","lastname"=>"H. M. van de Wal","email"=>"","phonenumber"=>"06-43805355"),
            array("initials"=>"G. J. M. Jansen/","lastname"=>"A. Lubbers- Rugers","email"=>"","phonenumber"=>"026- 4456457 "),
            array("initials"=>"P.","lastname"=>"Harmsen","email"=>"p.harmsen@stellicher.nl","phonenumber"=>"06-24200242"),
            array("initials"=>"M. ","lastname"=>"Kasteel","email"=>"m.kasteel@hotmail.com","phonenumber"=>"06-48721343"),
            array("initials"=>"F.","lastname"=>"Kroneman","email"=>"","phonenumber"=>"026- 4425921"),
            array("initials"=>"N.","lastname"=>"Valen","email"=>"nj.valen@chello.nl","phonenumber"=>"06-51132268"),
            array("initials"=>"J.T.J.","lastname"=>"Peijen","email"=>"info@janpeijen.nl","phonenumber"=>"06-40291726"),
            array("initials"=>"L. Sijnen","lastname"=>"C. Bordewijk","email"=>"lucseinen@gmail.com","phonenumber"=>"06-30002718"),
            array("initials"=>"","lastname"=>"","email"=>"","phonenumber"=>"06-47314185"),
            array("initials"=>"J.","lastname"=>"Visser","email"=>"jitskevisser96@gmail.com","phonenumber"=>"06-28813454"),
            array("initials"=>"Y. van","lastname"=>"Oers","email"=>"holyvet@hotmail.com","phonenumber"=>"06-10545684"),
            array("initials"=>"R. ","lastname"=>"Hos","email"=>"rudahos@upcmail.nl","phonenumber"=>"026- 8400451/06-40356443"),
            array("initials"=>"C. van","lastname"=>"Hal","email"=>"carinavanhal@hotmail.com","phonenumber"=>"026- 4457438"),
            array("initials"=>"J.","lastname"=>"Spijker","email"=>"janinespijker-t@telfort.nl","phonenumber"=>"06-25451179"),
            array("initials"=>"J. Th. M. van","lastname"=>"Hal- Sommers","email"=>"","phonenumber"=>"026- 4436211"),
            array("initials"=>"M. J. ","lastname"=>"Rietbergen","email"=>"","phonenumber"=>"026- 4455703"),
            array("initials"=>"L. A. M. G.","lastname"=>"Evers - Knuvelder","email"=>"","phonenumber"=>"026-4458787"),
            array("initials"=>"R. Hoonakker","lastname"=>"N.J. Udo","email"=>"r.hoonakker@gmail.com","phonenumber"=>"06-53415228"),
            array("initials"=>"M.","lastname"=>"Mulder","email"=>"m.mulder46@upcmail.nl","phonenumber"=>"06-55395669"),
            array("initials"=>"R.L.","lastname"=>"Stevens","email"=>"ronnie@zoo.nl","phonenumber"=>"06-21592131"),
            array("initials"=>"W.J.M.","lastname"=>"Hermens","email"=>"","phonenumber"=>""),
            array("initials"=>"A. ","lastname"=>"Otter","email"=>"","phonenumber"=>"026- 8443571/ 06-18925293"),
            array("initials"=>"E.","lastname"=>"Simonetti","email"=>"eva.simonetti@hetnet.nl","phonenumber"=>"026- 3610717/06-26474096"),
            array("initials"=>"C. L. M. van","lastname"=>"Ditshuizen","email"=>"kittyvd@planet.nl","phonenumber"=>"06-15428926"),
            array("initials"=>"M. N.","lastname"=>"van Roon","email"=>"marjanvanroon@operamail.com","phonenumber"=>"026- 3510051/06-12145076"),
            array("initials"=>"L.","lastname"=>"Huuskes- Roordink","email"=>"","phonenumber"=>"026- 3215979"),
            array("initials"=>"J. M..","lastname"=>"Hendriks","email"=>"martenhendriks@tele2.nl","phonenumber"=>"06-41983515"),
            array("initials"=>"D. Brakenhoff/","lastname"=>"E.Berendsen","email"=>"elkeberendsen1@hotmail.com","phonenumber"=>"026- 3510051"),
            array("initials"=>"A.","lastname"=>"Brinks","email"=>"a.brinks6@chello.nl","phonenumber"=>"026-3705504"),
            array("initials"=>"A. M. Zwartkruis-","lastname"=>"van den Heuvel","email"=>"","phonenumber"=>"026- 4426303/06-22857152"),
            array("initials"=>"A.J. de","lastname"=>"With","email"=>"ajdewith@gmail.com","phonenumber"=>"06-51902344"),
            array("initials"=>"J. J.","lastname"=>"Mooij","email"=>"janine.mooij@gmail.com","phonenumber"=>"06-27221497"),
            array("initials"=>"J.F. ","lastname"=>"Schröder-Keuning","email"=>"schrojafer@kpnmail.nl","phonenumber"=>"026-8482765"),
            array("initials"=>"J. M. van den","lastname"=>"Boogaard","email"=>"ankie.vandenboogaard@arcadis.nl","phonenumber"=>"17/Mar"),
            array("initials"=>"D.","lastname"=>"Pepels","email"=>"pepels@live.nl","phonenumber"=>""),
            array("initials"=>"T.H.O. Janssen/","lastname"=>"S.van 't Ende","email"=>"suzevantende@icloud.com","phonenumber"=>"06-40580332"),
            array("initials"=>"W. F. M. ","lastname"=>"Dagmar- Peters","email"=>"wfmdagmar@hetnet.nl","phonenumber"=>"026-3233929"),
            array("initials"=>"J.","lastname"=>"Lagerweij","email"=>"","phonenumber"=>"026-4423347"),
            array("initials"=>"P.B.I.","lastname"=>"Speldenbrink","email"=>"Speldenbrink@gmail.com","phonenumber"=>"06-49835050"),
            array("initials"=>"G.","lastname"=>"Hiemstra","email"=>"ghislaine0202@gmail.com","phonenumber"=>"06-25229876/026-8481603"),
            array("initials"=>"","lastname"=>"","email"=>"","phonenumber"=>""),
            array("initials"=>"O. T. B.","lastname"=>"Meijer","email"=>"osja.meijer@kpnplanet.nl","phonenumber"=>"026- 4454920"),
            array("initials"=>"D. ","lastname"=>"Hijdra","email"=>"daan.hijdra@gmail.com","phonenumber"=>"06-36304291"),
            array("initials"=>"L.","lastname"=>"van Duin","email"=>"l.v.duin@t-mobilethuis.nl","phonenumber"=>"06-51825518"),
            array("initials"=>"M. van ","lastname"=>"Vliet","email"=>"imeelvoormigil@yahoo.co.uk","phonenumber"=>"06-51996792"),
            array("initials"=>"C. M. de","lastname"=>"Gijsel","email"=>"","phonenumber"=>"06-33565990/06-15162660"),
            array("initials"=>"L. van ","lastname"=>"Buggenum - van Stekelenburg","email"=>"lenevstekelenburg@gmail.com","phonenumber"=>"026-4431975/06-10788279"),
            array("initials"=>"C. M. van der ","lastname"=>"Zon","email"=>"ceesvanderzon@hotmail.com","phonenumber"=>"06-20517661"),
            array("initials"=>"J.","lastname"=>"Zweep","email"=>"mail@jakobhelmer.nl","phonenumber"=>"06-81039304"),
            array("initials"=>"B.","lastname"=>"Mangiacavallo","email"=>"b_mangiacavallo@hotmail.com","phonenumber"=>"06-10368618"),
            array("initials"=>"M. van der/ ","lastname"=>"Craats - v. d. Ham","email"=>"","phonenumber"=>"026- 3634205"),
            array("initials"=>"N. Heintzbergen/","lastname"=>"M. Hermsen","email"=>"marionhermsen@hotmail.com","phonenumber"=>"06-29220389"),
            array("initials"=>"G. ","lastname"=>"Bergman","email"=>"inalaagland@gmail.com","phonenumber"=>"026- 3610194/06-39440566"),
            array("initials"=>"M.","lastname"=>"Dotman","email"=>"mary.dotje5@gmail.com","phonenumber"=>"026-3620329/06-24977262"),
            array("initials"=>"I.","lastname"=>"Willemsen","email"=>"igorwillemsen@hotmail.com","phonenumber"=>"06-21292125"),
            array("initials"=>"B. A.","lastname"=>"Groot Antink – Koch","email"=>"b.grootantink@upcmail.nl","phonenumber"=>"026- 3612665"),
            array("initials"=>"R. Berendsen/","lastname"=>"S. van Lith","email"=>"ricoberendsen89@hotmail.com","phonenumber"=>"06-46106134"),
            array("initials"=>"A. Mangiacavallo/ ","lastname"=>"Sanders","email"=>"j.mangiacavallo@hotmail.com","phonenumber"=>"026-3636137"),
            array("initials"=>"G. van","lastname"=>"Vuurden","email"=>"bertsophievanvuurden@gmail.com","phonenumber"=>"026- 3611383/0612788748"),
            array("initials"=>"G.","lastname"=>"Sanders","email"=>"","phonenumber"=>"026- 3628516"),
            array("initials"=>"J. H. ","lastname"=>"Hermeling- van Niftrik","email"=>"henk.hermeling@hanou.net","phonenumber"=>"026-3114662/06-44188868"),
            array("initials"=>"I.J.M.","lastname"=>"Groot Antink","email"=>"i.grootantink@gmail.com","phonenumber"=>"06-22300296"),
            array("initials"=>"G. A. van Kooten Niekerk/","lastname"=>"R. R. Houweling","email"=>"gauwain@gmail.com","phonenumber"=>"06-14465635"),
            array("initials"=>"G. W. F. ","lastname"=>"Koopmans","email"=>"","phonenumber"=>"026-8400842"),
            array("initials"=>"J. M. A.","lastname"=>"Welling – Voortman","email"=>"","phonenumber"=>"026- 3618645"),
            array("initials"=>"C. T. J. ","lastname"=>"Fischer","email"=>"kitty.fischer@outlook.com","phonenumber"=>"06-53813973"),
            array("initials"=>"H.","lastname"=>"Bulten","email"=>"","phonenumber"=>"026-8484357"),
            array("initials"=>"L. Velders/","lastname"=>"R.P.J. Peters","email"=>" lisanne.velders@gmail.com","phonenumber"=>"06-24347749"),
            array("initials"=>"C.","lastname"=>"Vendrik","email"=>"info@ceesvendrik.nl","phonenumber"=>"026- 3617549/026-7600044"),
            array("initials"=>"A. L. C. Dicker/","lastname"=>"R. van Uem","email"=>"tonavanti@live.nl","phonenumber"=>"06-22461115"),
            array("initials"=>"R. L. Houtriet/","lastname"=>"D. Meynhard van Schoor","email"=>"f.meynhard@upcmail.nl","phonenumber"=>"06-29382548"),
            array("initials"=>"R.","lastname"=>"Kooyman","email"=>"","phonenumber"=>"026- 4438004"),
            array("initials"=>"Th. C.","lastname"=>"Dicks","email"=>"th.dicks@chello.nl","phonenumber"=>"026- 3613046"),
            array("initials"=>"W. Tj. van der","lastname"=>"Veen","email"=>"w.vdveen1@chello.nl","phonenumber"=>"026- 3612534"),
            array("initials"=>"A.","lastname"=>"Meynhard van Schoor","email"=>"","phonenumber"=>"026- 3642675/06-24207685"),
            array("initials"=>"J. F.","lastname"=>"Visser","email"=>"ah.visser@upcmail.nl","phonenumber"=>"026- 3612532"),
            array("initials"=>"J. M. C. van","lastname"=>"Well – Karssenberg","email"=>"tvanwell@hotmail.com","phonenumber"=>"026- 3621711"),
            array("initials"=>"I.H.","lastname"=>"Stern","email"=>"irishelena@hotmail.nl","phonenumber"=>"06-11234209"),
            array("initials"=>"E.","lastname"=>"Offerijns","email"=>"liesbeth.offerijns@planet.nl","phonenumber"=>"06-53618068       "),
            array("initials"=>"F.J. Gerritse","lastname"=>"/ C.T.M. Ambaum","email"=>"fredgerritse@hotmail.com","phonenumber"=>"06-31000797"),
            array("initials"=>"J. ","lastname"=>"Pauwels","email"=>"j.pauwels@telfort.nl","phonenumber"=>"06-15321509"),
            array("initials"=>"J. F. W. ","lastname"=>"Nieuwdorp- Koopmans","email"=>"","phonenumber"=>"026- 3620720"),
            array("initials"=>"J.A. de Wild","lastname"=>"M.A. de Wild- van Moerkerk","email"=>"dewild@hetnet.nl","phonenumber"=>"06-53930270"),
            array("initials"=>"P. J. van","lastname"=>"Eldik - Schoonderbeek","email"=>"","phonenumber"=>"026- 3644553"),
            array("initials"=>"H. van den ","lastname"=>"Oosterkamp- Balk","email"=>"info@aandebeek.nl","phonenumber"=>"026-4436780/06-20369116"),
            array("initials"=>"J.G.","lastname"=>"Buitenhuis/Veenvliet","email"=>"frank@recentis.nl","phonenumber"=>"06-12135303"),
            array("initials"=>"Y. C. M. ","lastname"=>"Verheyen","email"=>"","phonenumber"=>"026- 3611543"),
            array("initials"=>"K.","lastname"=>"Mazereeuw","email"=>"kimmaz@hotmail.com","phonenumber"=>"026-3635156/ 06-36113089"),
            array("initials"=>"W.","lastname"=>"Krechting - Flipse","email"=>"w.krechting@hetnet.nl","phonenumber"=>"026- 3610589"),
            array("initials"=>"C.R. ","lastname"=>"Kamphuisen","email"=>"chant35@gmail.com","phonenumber"=>"06-30100361"),
            array("initials"=>"H.","lastname"=>"Veenvliet","email"=>"mosjen@live.nl","phonenumber"=>"06-54707229"),
            array("initials"=>"M.","lastname"=>"Witten","email"=>"engeltjesgek@hotmail.com","phonenumber"=>"026- 3621559 / 0655725556"),
            array("initials"=>"M.M. Schaafsma","lastname"=>"S.T.D. van Vliet","email"=>"<maaike_schaafsma@outlook.com> ","phonenumber"=>"06-29326240"),
            array("initials"=>"S. ","lastname"=>"Velders","email"=>"sebas-v@live.nl","phonenumber"=>"06-22782334"),
            array("initials"=>"E. F. ","lastname"=>"Schouten","email"=>"e.schouten93@upcmail.nl","phonenumber"=>"026-7850672/06-27378511 "),
            array("initials"=>"F. Buitenhuis/","lastname"=>"M.Heesemans","email"=>"f.buitenhuis@focum.nl","phonenumber"=>"06-21150874"),
            array("initials"=>"Y","lastname"=>"Slier ","email"=>"y.slier@upcmail.nl","phonenumber"=>"026- 3614808"),
            array("initials"=>"H.","lastname"=>"Swinkels","email"=>"haamswinkels@hotmail.com","phonenumber"=>"026- 3610108"),
            array("initials"=>"G. van Galen/  ","lastname"=>"C.P.W. Kradolfer","email"=>"g.vangalen@hotmail.com","phonenumber"=>"026- 3629802"),
            array("initials"=>"A. A. V.","lastname"=>"Willemsen- van Galen","email"=>"","phonenumber"=>"026- 4420328"),
            array("initials"=>"Th. J. van","lastname"=>"Niftrik","email"=>"T.v.Niftrik@het net.nl","phonenumber"=>"026- 3790292"),
            array("initials"=>"R.J.M. van","lastname"=>"Ooijen","email"=>"robbert.vanooijen13@gmail.com","phonenumber"=>"06-82502211"),
            array("initials"=>"R. W. van ","lastname"=>"Norden- Verhaaff","email"=>"daan063@hotmail.com","phonenumber"=>"026- 3613289/06-41762850"),
            array("initials"=>"O. Gercek/","lastname"=>"S. Rothuizen","email"=>"sannerothuizen01@gmail.com","phonenumber"=>"06-36171092"),
            array("initials"=>"H.","lastname"=>"Hennink","email"=>"henk-hennink@planet.nl","phonenumber"=>"026- 3612681"),
            array("initials"=>"M.V. ","lastname"=>"King","email"=>"Amorking@live.nl","phonenumber"=>"06-12318525"),
            array("initials"=>"C. Mangiacavallo/","lastname"=>"F. van Eldik","email"=>"c.mangiacavallo@orange.nl","phonenumber"=>"06- 21424140"),
            array("initials"=>"W.J.M.","lastname"=>"ter Hoeve","email"=>"rusaloan@hotmail.com","phonenumber"=>"06-18676932"),
            array("initials"=>"H. Broekhuizen-","lastname"=>"Schoot","email"=>"broekhuizen-schoot@live.nl","phonenumber"=>"026-3618049"),
            array("initials"=>"J.","lastname"=>"Knaven","email"=>"jokeknaven@outlook.com","phonenumber"=>"06-20912629"),
            array("initials"=>"C. Buitelaar/","lastname"=>"E. H. M. Wijnands","email"=>"ellenwijnands@kpnmail.nl","phonenumber"=>"026-3511540/06-33716850/06-4869970"),
            array("initials"=>"W. den","lastname"=>"Boer","email"=>"wilmadenboer63@gmail.com","phonenumber"=>"06-21937371"),
            array("initials"=>"C. M.","lastname"=>"Vogt","email"=>"vogt.c.m@planet.nl","phonenumber"=>"06-57762661"),
            array("initials"=>"L. C. R. Kamphuis/","lastname"=>"I. J. M. Heinink","email"=>"lekama@planet.nl","phonenumber"=>"026-4457378 / 06-51115018"),
            array("initials"=>"J. van ","lastname"=>"Roeden","email"=>"hulp8@live.nl","phonenumber"=>"06-25390226"),
            array("initials"=>"D. ","lastname"=>"Zilius","email"=>"doriszilius@gmail.com","phonenumber"=>"026-3709952"),
            array("initials"=>"S.","lastname"=>"Wang","email"=>"susannekeyserwang@gmail.com","phonenumber"=>"06-19039619"),
            array("initials"=>"I.","lastname"=>"Peters","email"=>"ingrid.peters55@gmail.com","phonenumber"=>"026-3635373"),
            array("initials"=>"M. A. C. L.","lastname"=>"Melchers","email"=>"maclmelchers@gmail.com","phonenumber"=>"06-30838950"),
            array("initials"=>"J. ","lastname"=>"Steinebach","email"=>"judithkiezebrink@hotmail.com","phonenumber"=>"06-12117082"),
            array("initials"=>"A. J. Groenhuizen/","lastname"=>"J. G. Riethorst","email"=>"groenhuizen@yahoo.com","phonenumber"=>"026-3336044"),
            array("initials"=>"T. Beumer/","lastname"=>"Beumer-Schippers","email"=>"tonbeumer@live.nl","phonenumber"=>"06-28956476"),
            array("initials"=>"R. G. M. Willemsen/","lastname"=>"J. M. Proost","email"=>"","phonenumber"=>"026-3254761"),
            array("initials"=>"E. P. ","lastname"=>"Gerritsen- Vedder","email"=>"","phonenumber"=>"026-4423796"),
            array("initials"=>"H.","lastname"=>"Enderink","email"=>"","phonenumber"=>"026-3232501"),
            array("initials"=>"W. M . ","lastname"=>"Giezen","email"=>"giezenmw@planet.nl","phonenumber"=>"026-3815639/0610473380"),
            array("initials"=>"H. Banens-","lastname"=>"Janitschek","email"=>"","phonenumber"=>"026-4430856/0620436715"),
            array("initials"=>"J.","lastname"=>"van Driel","email"=>"joopvandriel@gmail.com","phonenumber"=>"06-11773590"),
            array("initials"=>"K. ","lastname"=>"Schuitvlot","email"=>"karimaschuitvlot@versatel.nl","phonenumber"=>"026-4424175"),
            array("initials"=>"B. J. M. Blokhuis/ ","lastname"=>"M.L. Eiling","email"=>"benblokhuis9@gmail.com","phonenumber"=>"026-4452877"),
            array("initials"=>"R.B.H. van ","lastname"=>"Wandelen","email"=>"rudolfovanwandelen@hotmail.com","phonenumber"=>"06-20076224"),
            array("initials"=>"W. P. ","lastname"=>"Bosveld","email"=>"","phonenumber"=>"026-3709909"),
        );
        $i = 1;
        foreach($renters as $renter) {
            DB::table('renters')->insert([
                'initials' => $renter['initials'],
                'lastname' => $renter['lastname'],
                'email' => $renter['email'],
                'phonenumber' => $renter['phonenumber'],
                'house_id' => $i,
                'created_at' => Carbon::now(),
            ]);
            $i++;
        }

    }
}
