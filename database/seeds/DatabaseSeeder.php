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
        // DB::table('categories')->insert([
        //     'title' => 'Batai',
        //     'description' => 'Daug gerų batų',
        //     'parent' => 0
        // ]);

        // DB::table('categories')->insert([
        //     'title' => 'Kailiniai',
        //     'description' => 'Daug gerų kailinių ir šūbų',
        //     'parent' => 0
        // ]);

        // DB::table('categories')->insert([
        //     'title' => 'Sviestiniai sausainiai',
        //     'description' => 'Sviestas ir sausainiai viename',
        //     'parent' => 0
        // ]);

        // DB::table('categories')->insert([
        //     'title' => 'Kepurės',
        //     'description' => 'Daug kepurių',
        //     'parent' => 0
        // ]);

        // DB::table('categories')->insert([
        //     'title' => 'Kava',
        //     'description' => 'Skani kava ir dar visko prie kavos',
        //     'parent' => 0
        // ]);

        $faker = Faker::create();

        foreach(range(0, 29) as $val) {
            DB::table('categories')->insert([
                'title' => $faker->company(),
                'description' => $faker->realText(400),
                'parent' => 0
            ]);
        }
    }
}
