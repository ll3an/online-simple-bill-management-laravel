<?php

use App\Bill;
use App\Customer;

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'short_address' => $faker->streetAddress,
        'detail_address' => $faker->address
    ];
});

$factory->define(App\Bill::class, function (Faker\Generator $faker) {
	$customerIds = Customer::pluck('id');
    return [
    	'customer_id' => $faker->randomElement($customerIds->toArray()),
        'bill_number' => $faker->numberBetween($min = 1000, $max = 10000),
        'amount' => $faker->numberBetween($min = 25000, $max = 50000)
    ];
});

$factory->define(App\Payment::class, function (Faker\Generator $faker) {
	$customerIds = Customer::pluck('id');
	$billIds = Bill::pluck('id');
    return [
    	'bill_id' => $faker->randomElement($billIds->toArray()),
        'amount' => $faker->numberBetween($min = 1000, $max = 25000)
    ];
});
