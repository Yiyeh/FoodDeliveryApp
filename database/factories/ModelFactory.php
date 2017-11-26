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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' 				=> $faker->name,
        'email' 			=> $faker->unique()->safeEmail,
        'password' 			=> $password ?: $password = bcrypt('secret'),
        'premium' 			=> $faker->numberBetween($min = 0, $max = 365),
        'online' 			=> $faker->boolean($chanceOfGettingTrue = 50),
        'remember_token' 	=> str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->word,
        'slug' => $faker->word,
    ];
});

$factory->define(App\FoodPlace::class, function (Faker\Generator $faker) {

    return [
    	'user_id'	=> $faker->numberBetween($min = 1, $max = 10),
    	'category_id'	=> $faker->numberBetween($min = 1, $max = 10),
        'name' 		=> $faker->company,
        'slug' 		=> $faker->slug,
        'short' 	=> $faker->realText($maxNbChars = 150, $indexSize = 2),
        'body' 		=> $faker->text($maxNbChars = 200),
        'phone'		=> $faker->e164PhoneNumber,
        'sector' 	=> $faker->streetName,
        'logo' 		=> $faker->imageUrl($width = 640, $height = 480, 'food'),
        'fbPage'	=> 'www.facebook.com',
        'commune'	=> $faker->state,
        'city'		=> $faker->city,
        'premium'	=> $faker->boolean($chanceOfGettingTrue = 50),
        'published' => $faker->boolean($chanceOfGettingTrue = 50),

    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {

    return [
    	'user_id'	     => $faker->numberBetween($min = 1, $max = 10),
        'foodPlace_id'   => $faker->numberBetween($min = 1, $max = 10),
        'body' 		     => $faker->realText($maxNbChars = 150, $indexSize = 2),  
        'phone'		     => $faker->e164PhoneNumber,
        'address' 	     => $faker->streetAddress,
        'ready'          => $faker->boolean($chanceOfGettingTrue = 50),

    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {

    return [
        'user_id'        => $faker->numberBetween($min = 1, $max = 30),
        'foodPlace_id'   => $faker->numberBetween($min = 1, $max = 50),
        'comment'        => $faker->realText($maxNbChars = 150, $indexSize = 2),  
        'score'          => $faker->numberBetween($min = 1, $max = 5),
    ];
});

$factory->define(App\FanPage::class, function (Faker\Generator $faker) {

    return [
        'user_id'       => $faker->numberBetween($min = 1, $max = 10),
        'foodPlace_id'  => $faker->numberBetween($min = 1, $max = 10),
        'url'           => "http://Facebook.com/nowaycl",  

    ];
});
