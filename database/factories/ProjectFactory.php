<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'city_id' => rand(1, 80),
        'company_id' => rand(1, 20),
        'user_id' => rand(1, 3),
        'name' => $faker->sentence(2),
        'execution_date' => $faker->date(),
        'is_active' => $faker->boolean() 
    ];
});
