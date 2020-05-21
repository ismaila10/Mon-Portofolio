<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profils')->insert(
            [
                [

                    'libelle' => 'Développeur full stack',
                    'nom_rue' => '21 Avenue Victor Hugo',
                    'ville' => 'CHOISY LE ROI',
                    'email2' => 'morbinho7@hotmail.com',
                    'phone1' => '0651590562',
                    'phone2' => '',
                    'describe' => 'htmlentities(Ma passion pour le d&eacute;veloppement web commence en 2015 et m\'a demand&eacute; un changement radical de cursus afin de pouvoir pleinement l\'exploiter. D&eacute;s lors, je mis tout en oeuvre pour percer dans cette voie, tout en prenant du plaisir sur les divers projets d&eacute;velopp&eacute;s.)',
                    'cv' => '[{"download_link":"profils\/April2020\/bPBb5ZkB6XsrLbuG7IZ2.pdf","original_name":"CV_Ismaila_Diallo_A.pdf"}]',
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

                ]
            ]
        );
    }
}
