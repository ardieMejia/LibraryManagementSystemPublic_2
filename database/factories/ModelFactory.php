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

$factory->define(App\Author::class, function (Faker\Generator $faker) {
    $randomString=str_random(10);
    return [
        'firstname' => $randomString,
        'lastname' => $randomString,
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    $randomString=str_random(10);
    return [
        'categoryname' => $randomString,
    ];
});

$factory->define(App\Subcategory::class, function (Faker\Generator $faker) {
    $randomString=str_random(15);
    $randomId=rand(1,4);
    return [
        'subcategoryname' => $randomString,
        'categories_id' => $randomId,
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    $randomISBN=rand(1000000000, 9999999999);
    $randomString=str_random(10);
    return [
        'ISBN' => $randomISBN,
        'title' => $randomString,
        'authors_id' => 1,
        'subcategories_id' => 1,
    ];
});
