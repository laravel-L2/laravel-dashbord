<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Postes;

class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Postes::create([
                'titre' => $faker->name,
                'department' => $faker->sentence,
                'add_poste_date' => $faker->date,
                'description' => $faker->sentence,
            ]);
        }
    }
}
