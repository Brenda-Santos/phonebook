<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'salutation' => $faker->title(),
        'name' => $faker->name,
        'number' => $faker->cellphoneNumber,
        'birth' => $faker->date('Y-m-d'),
        'email' => $faker->unique()->safeEmail,
        'note' => "Usuário criado usando método factory e classe faker."
    ];
});
