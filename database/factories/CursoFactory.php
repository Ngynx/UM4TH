<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Curso;
use App\Monitor;
use App\User;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
	$users = User::all();
	$user_ids = array();
	foreach($users as $user)
	{
		$user_ids[] = $user->id;
	}

	$user_id = $user_ids[array_rand($user_ids)];

	$monitors = Monitor::all();
	$monitor_ids = array();
	foreach($monitors as $monitor)
	{
		$monitor_ids[] = $monitor->id;
	}

	$monitor_id = $monitor_ids[array_rand($monitor_ids)];

    return [
		'name' => substr($faker->sentence(2), 0, -1),
		'description' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
		'img' => $faker->imageUrl(400, 300, null, false),
		'state' => $faker->randomElement($array = array ('A','X','C')),
		'monitor_id' => $monitor_id,
		'user_id' => $user_id,
    ];
});