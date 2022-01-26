<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title'=>$faker->name(),
        'genres'=>$faker->word(),
        'publication_date'=>$faker->dateTime(),
        'author'=>$faker->name(),
        'record_company'=>$faker->sentence(5),
        'duration'=>$faker->numberBetween(30, 600)
    ];
});
