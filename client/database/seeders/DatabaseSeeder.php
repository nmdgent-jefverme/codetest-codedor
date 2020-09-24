<?php

namespace Database\Seeders;

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
        // Creating 10 Random Categories
        for ($i=0; $i < 10; $i++) {
            $this->call(CategorySeeder::class);
        }

        // Creating 10 Random Recipes
        for ($i=0; $i < 10; $i++) {
            $this->call(RecipesSeeder::class);
        }

        // Creating 100 Random Ingredients
        for ($i=0; $i < 100; $i++) {
            $this->call(IngredientsSeeder::class);
        }
    }
}
