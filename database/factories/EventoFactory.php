<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->title(),
            'user_id'=> User::factory(),
            'img'=>fake()->url(),
            'body' =>fake()->text(),
            'data_de_inicio'=>fake()->date(),
            'data_de_fim'=>fake()->date(),
        ];
    }
}
