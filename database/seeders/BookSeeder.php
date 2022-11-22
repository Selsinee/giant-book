<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('books')->insert([
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'Twilight',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://upload.wikimedia.org/wikipedia/id/thumb/3/3c/Book_jacket_of_Twilight.jpeg/220px-Book_jacket_of_Twilight.jpeg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'Pride and Prejudice',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://almabooks.com/wp-content/uploads/2016/10/9781847493699.jpg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'Julis Caesar',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1631505382i/13006.jpg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'Your Name',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1485014553l/33960710.jpg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'Harry Potter',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://otimages.com/Bookcover/3427/9780590353427.jpg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'The ABC Murders',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://flxt.tmsimg.com/assets/p16306812_b_v13_ae.jpg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'The Murder of Roger Ackroyd',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://upload.wikimedia.org/wikipedia/en/5/57/The_Murder_of_Roger_Ackroyd_First_Edition_Cover_1926.jpg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'Murder on the Orient Express',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://upload.wikimedia.org/wikipedia/en/c/c0/Murder_on_the_Orient_Express_First_Edition_Cover_1934.jpg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'Wuthering Heights',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://upload.wikimedia.org/wikipedia/commons/6/64/Houghton_Lowell_1238.5_%28A%29_-_Wuthering_Heights%2C_1847.jpg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'Cry the beloved country',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1425562710l/415937.jpg'
            ],
            [
                'publisher_id'=>rand(1, 4),
                'title'=>'Animal Farm',
                'author'=>$faker->name(),
                'year'=>$faker->year(),
                'synopsis'=>$faker->text(),
                'image'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1299097929l/3149348.jpg'
            ]
            ]);
    }
}
