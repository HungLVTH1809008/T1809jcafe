<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(App\Category::class, function (Faker $faker) {

    return [

        'category_name' => $faker->name,
        'content' => $faker->jobTitle,
        'images' => $faker->image(),
        'describe' => $faker->jobTitle,
        'status' =>$faker->numberBetween(1),


    ];

});
$factory->define(App\Product::class, function (Faker $faker) {

    return [

        'product_name' => $faker->name,
        'category_id' => $faker->randomFloat(0,1,50),
        'detail'=>$faker->jobTitle,
        'price' => $faker->randomNumber(1),
        'status'=>$faker->numberBetween(1),
        'images' => $faker->image(),
        'date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'pricenew' => $faker->randomNumber(2)


    ];

});

//$factory->define(App\Customer::class, function (Faker $faker) {
//
//    return [
//
//        'customer_name' => $faker->name,
//        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
//        'address'=>$faker->creditCardNumber,
//        'email' => $faker->title,
//        'phoneNumber' => $faker-> creditCardNumber
//
//    ];
//
//});
//$factory->define(App\Employees::class, function (Faker $faker) {
//
//    return [
//
//        'employees_name' => $faker->name,
//        'sex' => $faker->boolean,
//        'birthday'=>$faker->date($format = 'Y-m-d', $max = 'now'),
//        'address'=>$faker->creditCardNumber,
//        'email' => $faker->title,
//        'phoneNumber' => $faker-> creditCardNumber
//
//    ];
//
//});





