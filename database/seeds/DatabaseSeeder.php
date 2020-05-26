<?php

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
        $categories = $this->call(CategoriesSeeder::class);
        $books = factory(App\Book::class, 21)->create();
        $authors = factory(App\Autor::class, 7)->create();

        foreach ($books as $book) {

            $qtyRandomAuthors = rand(0, 3);
            
            $randomAuthors = $authors->random($qtyRandomAuthors);
            $randomAuthors->all();

            $book->authors()->saveMany($randomAuthors);

        }

    }
}
