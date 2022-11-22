<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('publishers')->insert([
            [
                "name" => $faker->company(),
                "address" => $faker->address(),
                "phone" => $faker->phoneNumber(),
                "email" => $faker->companyEmail(),
                "image" => $faker->imageUrl()
            ],
            [
                "name" => $faker->company(),
                "address" => $faker->address(),
                "phone" => $faker->phoneNumber(),
                "email" => $faker->companyEmail(),
                "image" => $faker->imageUrl()
            ],
            [
                "name" => $faker->company(),
                "address" => $faker->address(),
                "phone" => $faker->phoneNumber(),
                "email" => $faker->companyEmail(),
                "image" => $faker->imageUrl()
            ],
            [
                "name" => $faker->company(),
                "address" => $faker->address(),
                "phone" => $faker->phoneNumber(),
                "email" => $faker->companyEmail(),
                "image" => $faker->imageUrl()
            ]
        ]);
    }
}
