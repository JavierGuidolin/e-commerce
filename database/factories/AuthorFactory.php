<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autor;
use Faker\Generator as Faker;

$factory->define(Autor::class, function (Faker $faker) {

    $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));

    return [
        'name' => $faker->sentence(2, true),
        'surname' => $faker->word,
        'cover' => $faker->imageUrl(240, 320, false, true, true, false, null)
    ];

});