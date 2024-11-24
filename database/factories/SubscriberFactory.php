<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscriber>
 */
class SubscriberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        $email = fake()->unique()->safeEmail();
        return [
            'name' => $name,
            'email' => $email,
            'hash' => md5($email),
            'delete'=>md5($email.$name),
            'verified_At' => now()
        ];
    }
}
