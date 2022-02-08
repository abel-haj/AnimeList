<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Anime;
use Faker\Generator as Faker;

$factory->define(Anime::class, function (Faker $faker) {
    return [
        'anime_name' => $faker->unique()->name,
        'anime_image' => 'https://source.unsplash.com/300x300/?anime', // nocover.jpg
        'anime_featured_image' => 'https://source.unsplash.com/800x300/?anime', // nofeatured.jpg
        'anime_release_date' => $faker->date(),
        'anime_description' => $faker->realText(400),
        'anime_rating' => $faker->numberBetween($min = 0, $max = 10),
        'anime_votes' => $faker->numberBetween($min = 0, $max = 1000)
    ];
});
