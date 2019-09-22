<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'url' => $faker -> imageUrl($width= 800, $height= 600),
        'description' => $faker->sentence ,
        'post_id' => $faker -> numberBetween(1,1500),
        'featured' => $faker ->randomElement([true, false]),
    ];
});
