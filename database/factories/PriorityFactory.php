<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Priority;
use Faker\Generator as Faker;

$factory->define(Priority::class, function (Faker $faker) {
    return [
        //
        'body' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'priority_level' => $faker->randomElement($array = array ('Highest','High','Medium','Low','Lowest'))
    ];
});
