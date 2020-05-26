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
        'isbn' => $faker->randomNumber(9),
        'pages' => $faker->numberBetween(250, 1600),
        'stock' => $faker->numberBetween(1, 99),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'resume' => $faker->paragraph(8, true),
        'price' => $faker->randomFloat(2, 0, 5000),
        'cover' => $faker->imageUrl(240, 320, true),
        'category_id' => $faker->randomElement($categories)->id
    ];

});