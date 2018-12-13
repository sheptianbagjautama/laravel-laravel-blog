<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];
        $faker = Faker\Factory::create();
        for($i=0;$i<20;$i++){
            $categories[$i] = [
                'name'       => $faker->colorName,
                'slug'       => $faker->colorName
            ];
        }
        DB::table('categories')->insert($categories);
    }
}
