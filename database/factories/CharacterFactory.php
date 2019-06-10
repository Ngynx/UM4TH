<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Character;
use App\User;
use Faker\Generator as Faker;

$factory->define(Character::class, function (Faker $faker) {
    $users = User::all();
	$user_ids = array();
	foreach($users as $user)
	{
		$user_ids[] = $user->id;
	}

	$user_id = $user_ids[array_rand($user_ids)];

    return [
    	'level' => $faker->numberBetween($min = 1, $max = 25),
		'exp' => $faker->numberBetween($min = 100, $max = 5000),
		'avatar' => $faker->userName,
		'damage' => $faker->numberBetween($min = 100, $max = 1000),
		'defense' => $faker->numberBetween($min = 100, $max = 1000),
		'life' => $faker->numberBetween($min = 1000, $max = 9000),
		'img' => $faker->imageUrl(350, 500, 'cats', true),
		'sound' => substr($faker->sentence(1), 0, -1),
		'user_id' => $user_id,
        //'level', 'exp', 'avatar', 'damage', 'defense', 'life', 'img', 'sound'
    ];
});
