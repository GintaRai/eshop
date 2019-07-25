<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Batai',
            'description' => 'Daug gerų batų',
            'slug' => str_slug('Batai'),
            'parent' => 0
        ]);

        DB::table('categories')->insert([
            'title' => 'Kailiniai',
            'description' => 'Daug gerų kailinių ir šūbų',
            'slug' => str_slug('Kailiniai'),
            'parent' => 0
        ]);

        DB::table('categories')->insert([
            'title' => 'Sviestiniai sausainiai',
            'description' => 'Sviestas ir sausainiai viename',
            'slug' => str_slug('Sviestiniai sausainiai'),
            'parent' => 0
        ]);

        DB::table('categories')->insert([
            'title' => 'Kepurės',
            'description' => 'Daug kepurių',
            'slug' => str_slug('Kepurės'),
            'parent' => 0
        ]);

        DB::table('categories')->insert([
            'title' => 'Kava',
            'description' => 'Skani kava ir dar visko prie kavos',
            'slug' => str_slug('Kava'),
            'parent' => 0
        ]);

        $faker = Faker::create();

        foreach(range(1, 60) as $val) {
            $title = $faker->realText(rand(30,60));
            $price = rand(100,10000)/100;
            DB::table('products')->insert([
                'title' => $title,
                'description' => $faker->realText(rand(200,600)),
                'price' => $price,
                'discount' => $price * rand(0,100)/100,
                'slug' => str_slug($title, '-'),
                'category_id' => rand(1,5),
                'stock' => rand(0,100)
            ]);
        }

        foreach(range(1, 60) as $key22 => $val) {
            foreach(range(1, rand(1, 10)) as $val1) {
                DB::table('images')->insert([
                    'path' => rand(1,29).'.jpg',
                    'product_id' => $key22 + 1
                ]);
            }
        }
    }
}



