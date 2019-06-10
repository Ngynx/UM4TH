<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Monitor;
use Faker\Generator as Faker;

$factory->define(Monitor::class, function (Faker $faker) {
    return [
    	'nombre' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'cell' => $faker->ssn,
        //'nombre', 'email', 'cell' 
    ];
});
