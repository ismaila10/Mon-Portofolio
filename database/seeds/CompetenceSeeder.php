<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competences')->insert(
            [
                [
                    'name' => 'PHP',
                    'pourcentage' => 80,
                    'comments' => 'rrf',
                    'user_id' => 1,
                    'type_competence_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Laravel',
                    'pourcentage' => 70,
                    'comments' => 'ffsgfd',
                    'user_id' => 1,
                    'type_competence_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'C#',
                    'pourcentage' => 65,
                    'comments' => 'fdfgdf',
                    'user_id' => 1,
                    'type_competence_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Javascript',
                    'pourcentage' => 60,
                    'comments' => 'fsfd',
                    'user_id' => 1,
                    'type_competence_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Vue Js',
                    'pourcentage' => 60,
                    'comments' => 'ffsgf',
                    'user_id' => 1,
                    'type_competence_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Python	',
                    'pourcentage' => 40,
                    'comments' => 'fds',
                    'user_id' => 1,
                    'type_competence_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Java',
                    'pourcentage' => 40,
                    'comments' => 'vfdvdf',
                    'user_id' => 1,
                    'type_competence_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Travail d\'équipe',
                    'pourcentage' => 86,
                    'comments' => 'fsdfdf',
                    'user_id' => 1,
                    'type_competence_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Communication',
                    'pourcentage' => 65,
                    'comments' => 'fsdf',
                    'user_id' => 1,
                    'type_competence_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Créativité',
                    'pourcentage' => '70',
                    'comments' => 'fsdfv',
                    'user_id' => 1,
                    'type_competence_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Autonomie',
                    'pourcentage' => 70,
                    'comments' => 'fvdfvdf',
                    'user_id' => 1,
                    'type_competence_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]

            ]
        );
    }
}
