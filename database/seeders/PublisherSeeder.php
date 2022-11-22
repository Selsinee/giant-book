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

        DB::table('publishers')->insert(array_map(function() {
            return $this->getData();
        }, array_fill(0, 5, null)));
    }

    private function getData() {
        $faker = Factory::create();
        return [
                "name" => $faker->company(),
                "address" => $faker->address(),
                "phone" => $faker->phoneNumber(),
                "email" => $faker->companyEmail(),
                "image" => $faker->imageUrl()
        ];
    }
}
