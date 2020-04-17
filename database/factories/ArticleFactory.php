<?php
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory -> define(App\Article::class, function (Faker $faker) {
    $content = $faker -> text(5000);
    return [
        'title' => $faker -> sentence(),
        'content_raw' => $content,
        'content_html' => $content
    ];
});
