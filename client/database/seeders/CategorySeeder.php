<?php

namespace Database\Seeders;

use Faker;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();
        $category = new Category();
        $category->title = $faker->word;
        $category->save();
    }
}
