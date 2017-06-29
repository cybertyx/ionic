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
use DeliveryQuick\User;
use DeliveryQuick\Models\Category;
use DeliveryQuick\Models\Client;
use DeliveryQuick\Models\Products;


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'              => $faker->name,
        'email'             => $faker->unique()->safeEmail,
        'password'          => $password ?: $password = bcrypt('secret'),
        'remember_token'    => str_random(10),
    ];
});


$factory->define(Category::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->word,
    ];
});

$factory->define(Products::class, function(Faker\Generator $faker){
    return [
        'name'          => $faker->word,
        'description'   => $faker->sentence,
        'price'         => $faker->numberBetween(10, 50),
    ];
});

$factory->define(Client::class, function(Faker\Generator $faker){
    return [
        'phone'     => $faker->phoneNumber,
        'address'   => $faker->address,
        'city'      => $faker->city,
        'state'     => $faker->state,
        'zipcode'   => $faker->postcode,
    ];
});
