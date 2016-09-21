<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(TodoApi\Models\User::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('sr_Latn_RS');

    return [
        'uuid' => Uuid::generate(4),
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('123456789'),
    ];
});

$factory->define(TodoApi\Models\Todo::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('sr_Latn_RS');

    $isCompleted = $faker->boolean(50);
    $isActive = ($isCompleted) ? true : $faker->boolean(33);

    return [
        'uuid' => Uuid::generate(4),
        'content' => $faker->text(100),
        'is_active' => $isActive,
        'is_completed' => $isCompleted,
        'user_id' => $faker->numberBetween(1, 10),
    ];
});
