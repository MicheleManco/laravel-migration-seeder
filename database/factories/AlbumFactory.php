<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title'=>$faker->name(),
        'n_songs'=>$faker->numberBetween(1, 50),
        'sold'=>$faker->numberBetween(0, 100000),
        'record_company'=>$faker->sentence(5),
        'genres'=>$faker->word(),
        'publication_date'=>$faker->dateTime(),
        'author'=>$faker->name(),
    ];
});
