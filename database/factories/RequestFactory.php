<?php

use App\Models\Request;
use Faker\Generator as Faker;

$factory->define(App\Models\Request::class, function (Faker $faker) {

    $category = (new App\Models\RequestCategory)->where('id', '!=', 1)->inRandomOrder()->first();
    $resident = (new App\Models\Resident)->where('unit_id', '>', 0)->inRandomOrder()->first();

    $status = $faker->randomElement(array_keys(Request::Status));
    $priority = $faker->randomElement(array_keys(Request::Priority));
    $qualification = $faker->randomElement(array_keys(Request::Qualification));
    $solvedDate = ($status == Request::StatusDone) ? now() : null;

    return [
        'category_id' => $category->id,
        'resident_id' => $resident->id,
        'unit_id' => $resident->unit_id,
        'title' => $faker->sentence(4),
        'description' => $faker->text,
        'status' => $status,
        'priority' => $priority,
        'qualification' => $qualification,
        'due_date' => $faker->dateTimeBetween('-30 days', '40 days'),
        'solved_date' => $solvedDate,
        'visibility' => $faker->numberBetween(1, 3),
    ];
});
