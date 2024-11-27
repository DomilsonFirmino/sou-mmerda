<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'carga'=>fake()->randomDigit(['5']),
            'user_id'=> User::factory(),
            'body' =>fake()->text(),
            'certificado'=>fake()->company(),
            'img'=>fake()->url(),
            'programa'=>fake()->url()
        ];
    }
}
