<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
            
            'name'=>$faker->firstName(),
            'surname'=>$faker->lastName(),
            'age'=>$faker->numberBetween(5, 110),
            'date_of_birth'=>$faker->dateTime(),
            'stage_name'=>$faker->name(), 
            'record_company'=>$faker->sentence(5)
    ];
});
