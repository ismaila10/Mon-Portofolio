<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert(
            [

                [
                    'title' => 'Technicien Informatique',
                    'nom_entreprise' => 'ANTARES',
                    'domaine_activite' => 'Conseils et Services Numériques',
                    'adresse_entreprise' => 'LEVALLOIS-PERRET',
                    'mission' => '<div class="page" title="Page 1">
                        <div class="section" style="background-color: rgb(100.000000%, 100.000000%, 100.000000%);">
                        <div class="layoutArea">
                        <div class="column">
                        <p>&lt;li&gt;G&eacute;rer le d&eacute;m&eacute;nagement de plusieurs postes informatiques pour le compte d\'une institution&lt;/li&gt;</p>
                        <p class="MsoNormal" style="margin: 0cm 0cm 0.0001pt; font-size: 12pt; font-family: \'Times New Roman\', serif; color: #000000;"><span style="font-size: 10.5pt; font-family: Verdana, sans-serif; color: #444444; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&lt;li&gt;Etiquetage, d&eacute;connexion, reconnexion, param&eacute;trage et test&lt;/li&gt;</span></p>
                        </div>
                        </div>
                        </div>
                        </div>',
                    'date_debut' => '2019-11-15',
                    'date_fin' => null,
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'contrat' => 'Intérim',
                    'type_experience_id' => 2,
                    'url' => 'https://www.antares.fr'
                ],
                [
                    'title' => 'Développeur informatique',
                    'nom_entreprise' => 'SAMBATY',
                    'domaine_activite' => 'Envoi de colis et de plis',
                    'adresse_entreprise' => 'Thiais',
                    'mission' => '<p>&lt;li&gt;Gestion du serveur pour le suivi colis et Gestion du dashboard d&eacute;velopp&eacute; sp&eacute;cialement pour l\'entreprise&lt;/li&gt;</p>
                        <p>&lt;li&gt;Gestion de l\'extraction des donn&eacute;es et de la messagerie de l\'entreprise&lt;/li&gt;</p>',
                    'date_debut' => '2019-06-20',
                    'date_fin' => '2020-11-15',
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'contrat' => 'Stage',
                    'type_experience_id' => 2,
                    'url' => 'https://sambaty.com'
                ],
                [
                    'title' => 'Développeur informatique',
                    'nom_entreprise' => 'NKD',
                    'domaine_activite' => 'Conseils et Services numérique',
                    'adresse_entreprise' => 'Dakar, Sénégal',
                    'mission' => '<div class="page" title="Page 1">
                        <div class="section" style="background-color: rgb(100.000000%, 100.000000%, 100.000000%);">
                        <div class="layoutArea">
                        <p>&lt;li&gt;Fournir des m&eacute;thodes de d&eacute;veloppement logiciel orient&eacute; objet et m&eacute;thodes de conception de base de donn&eacute;es efficaces&lt;/li&gt;</p>
                        </div>
                        </div>
                        </div>
                        <p>&lt;li&gt;Respecter syst&eacute;matiquement les d&eacute;lais et les instructions de tous les projets de productions&lt;/li&gt;</p>
                        <p>&lt;li&gt;Recommander des am&eacute;liorations d\'architecture, des solutions de conception et des solutions d\'int&eacute;gration&lt;/li&gt;</p>',
                    'date_debut' => '2018-08-02',
                    'date_fin' => '2018-12-30',
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'contrat' => 'Stage',
                    'type_experience_id' => 2,
                    'url' => '#'
                ],
                [
                    'title' => 'Développeur d\'Application',
                    'nom_entreprise' => 'Openclassrooms',
                    'domaine_activite' => 'IT',
                    'adresse_entreprise' => 'France',
                    'mission' => '<p>&lt;li&gt;Apprenez &agrave; programmer avec JavaScript jjbbjbjbjkbjbjjk&lt;/li&gt;</p>
                        <p>&lt;li&gt;G&eacute;rez votre code avec Git et GitHub&lt;/li&gt;</p>
                        <p>&lt;li&gt;Optimisez votre d&eacute;ploiement en cr&eacute;ant des conteneurs avec Docker&lt;/li&gt;</p>',
                    'date_debut' => '2020-03-05',
                    'date_fin' => null,
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'contrat' => 'Formation',
                    'type_experience_id' => 1,
                    'url' => 'https://openclassrooms.com/fr/'
                ],
                [
                    'title' => 'MBA Ingénierie Informatique',
                    'nom_entreprise' => 'IESIG PARIS',
                    'domaine_activite' => 'Informatique et  Gestion',
                    'adresse_entreprise' => 'PARIS, 75013',
                    'mission' => '<p>Cr&eacute;er et diriger des projets d&rsquo;applications web et renforcer la satisfaction clients vis-&agrave;-vis des demandes croissantes des entreprises en termes de d&eacute;veloppement de projets web et mobiles.</p>
                        <p>&lt;li&gt;Validation de ma premi&egrave;re ann&eacute;e de MBA&nbsp; Ing&eacute;nierie Informatique&lt;/li&gt;</p>',
                    'date_debut' => '2019-02-02',
                    'date_fin' => '2020-03-06',
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'contrat' => 'Formation',
                    'type_experience_id' => 1,
                    'url' => 'http://www.iesig.com/fr/'
                ],
                [
                    'title' => 'Licence Informatique',
                    'nom_entreprise' => 'Université Dakar Bourguiba',
                    'domaine_activite' => 'Informatique - Management - Banque et Finance',
                    'adresse_entreprise' => 'Dakar, Senegal',
                    'mission' => '<p>Se familiariser avec le socle indispensable des sciences et techniques de l\'ing&eacute;nierie informatique et acqu&eacute;rir les comp&eacute;tences de chef de projet et la sp&eacute;cialisation experte que vous avez choisie</p>
                        <p>&lt;li&gt;Validation de mes trois ann&eacute;es de licence informatique&lt;/li&gt;</p>
                        <p>&lt;li&gt; Obtention d\'une attestation de r&eacute;ussite sur les 2 premi&egrave;res ann&eacute;es &lt;/li&gt;</p>
                        <p>&lt;li&gt; Obtention d\'un diplome de licence en informatique sp&eacute;cialisation G&eacute;nie Logiciel avec mention assez bien&lt;/li&gt;</p>',
                    'date_debut' => '2015-10-15',
                    'date_fin' => '2018-07-15',
                    'user_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'contrat' => 'Formation',
                    'type_experience_id' => 1,
                    'url' => 'http://www.udb-sn.com/index.php'
                ]

            ]
        );
    }
}
