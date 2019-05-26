<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Curso;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
    return [
    	'name' => substr($faker->sentence(2), 0, -1),
    	'description' => $faker->paragraph($nbSentences=5, $variableNbSentences=True),
    	'attendant' => $faker->name,
    	'state' => $faker->randomElement($array = array ('A','X','P')),
    	'img' => $faker->image('public/images', 400, 300, null, false)
    ];
});
