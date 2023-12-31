<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 15; $i++) {
            Film::create([
                'judul' => $faker->sentence,
                'sutradara' => $faker->name,
                'tanggal_rilis' => $faker->date
            ]);
        }
    }
}
