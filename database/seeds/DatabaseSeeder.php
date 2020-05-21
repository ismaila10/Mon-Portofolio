<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(ProfilSeeder::class);
        //$this->call(TypeCompetenceSeeder::class);
        //$this->call(TypeExperienceSeeder::class);
        //$this->call(CompetenceSeeder::class);
        //$this->call(ExperienceSeeder::class);
        $this->call(SavoirFaireSeeder::class);
    }
}
