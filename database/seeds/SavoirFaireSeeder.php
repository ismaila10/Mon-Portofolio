<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SavoirFaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('savoir_faires')->insert(
            [
                [

                    'title' => 'Modélisation des données',
                    'describe' => '<p><span style="color: #000000; font-family: roboto, sans-serif;">Faire l\'analyse et la conception de l\'information contenue dans le syst&egrave;me afin de repr&eacute;senter la structure de ces informations et de structurer le stockage et les traitements informatiques.</span></p>',
                    'icon' => 'fa fa-database',
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

                ],
                [

                    'title' => 'Développement Web',
                    'describe' => '<p><span style="color: #000000; font-family: roboto, sans-serif;">Mon exp&eacute;rience acquise au fil des projets me permet de mieux comprendre les attentes d\'un client et de r&eacute;pondre pr&eacute;cis&eacute;ment au besoin demand&eacute; en fonction du domaine d\'activit&eacute;.</span></p>',
                    'icon' => 'fa fa-code iron-color',
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [

                    'title' => 'UI Design',
                    'describe' => '<p><span style="color: #000000; font-family: roboto, sans-serif;">Cr&eacute;er une interface agr&eacute;able et pratique, facile &agrave; prendre en main(le design du logo, le choix des couleurs et la typographie) dans le but de donner la meilleure exp&eacute;rience possible &agrave; l\'utilisateur.</span></p>',
                    'icon' => 'fa fa-bullseye purple-color',
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]

            ]
        );
    }
}
