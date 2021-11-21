<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Visitor;
use Faker\Generator as Faker;

$factory->define(Visitor::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'phone' =>$faker->phoneNumber,
        'purpose'=>$faker->word,
        'time' =>$faker->date
    ];
});
