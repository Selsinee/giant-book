<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_category')->insert([
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ],
            [
                "book_id"=>rand(1, 11),
                "category_id"=>rand(1, 5)
            ]
            ]);
    }
}
