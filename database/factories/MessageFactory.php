<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ChatRoom;
use App\Models\Message;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

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

$factory->define(Message::class, function (Faker $faker) {
    return [
        'chat_room_id' => factory(ChatRoom::class)->create(),
        'sender_id' => factory(User::class)->create(),
        'content' => $faker->words(10,true)
    ];
});
