<?php
/**
 * Created by PhpStorm.
 * User: yimeng
 * Date: 2016/12/1
 * Time: 下午4:47
 */

$factory->define(App\Models\VideoInfo::class, function (Faker\Generator $faker) {

    return [
        'video_name' => $faker->name(),
        'video_unique' => $faker->unique(),
        'media_id' => '12345678',
        'user_id' => $faker->randomNumber('100001', '100002', '100003'),
        'video_desc' => $faker->words(),
        'img' => $faker->imageUrl(),
        'video_duration' => $faker->randomNumber('100', '300', '10000'),
        'video_file' => $faker->imageUrl(),
    ];
});