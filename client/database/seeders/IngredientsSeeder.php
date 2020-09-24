<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use App\Models\Ingredient;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = ['kg', 'el', 'gr', 'l', 'cl', 'dl'];
        $faker = Faker\Factory::create();
        $ingredient = new Ingredient();
        $ingredient->title = $faker->word;
        $ingredient->recept_id = rand(0, 9);
        $ingredient->amount = rand(0, 2000);
        $ingredient->unit = $units[array_rand($units, 1)];
        $ingredient->save();
    }
}
