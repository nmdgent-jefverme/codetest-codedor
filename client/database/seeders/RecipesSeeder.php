<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use Faker;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $recipe = new Recipe();
        $recipe->instructions = $faker->paragraphs($nb = 3, $asText = true);
        $recipe->time = rand(0, 10);
        $recipe->category_id = rand(0, 9);
        $recipe->save();
    }
}
