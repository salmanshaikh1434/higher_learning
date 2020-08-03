<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(App\ProvisionalRegistration::class, function (Faker $faker) {
    return [
        'firstname'=> $faker->sentence(1),
        'middlename'=> $faker->sentence(1),
        'lastname'=>$faker->sentence(1),
        'phone'=>Str::random(10),
        'email'=> $faker->unique()->safeEmail,
        'dob'=>$faker->date('Y-m-d'),
        'sex'=>$faker->sentence(1),
        'cast'=>$faker->sentence(1),
        'course'=>$faker->sentence(1),
        'lastexam'=>$faker->sentence(1),
        'percentage'=>Str::random(2),
        'lastinst'=>$faker->sentence(4),
        'indian'=>$faker->sentence(1),
        't_and_c'=>$faker->sentence(1)

    ];
});
