<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {

    $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));
    $categories = Category::all();

    return [
        'title' => $faker->sentence(7, true),
        'isbn' => $faker->sentence(7, true),
        'pages' => $faker->numberBetween(1000, 1500),
        'stock' => $faker->numberBetween(10, 99),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'resume' => $faker->paragraph(8, true),
        'price' => $faker->randomFloat(2, 0, 5000),
        'cover' => $faker->imageUrl(240, 320, true),
        'category_id' => $faker->randomElement($categories)->id
    ];

});