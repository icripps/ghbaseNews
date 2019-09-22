<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence, 
        'url' => $faker->imageUrl($width=800,$height=600),
        'post_id' => $faker -> numberBetween(1, 100),
        
    ];
});
