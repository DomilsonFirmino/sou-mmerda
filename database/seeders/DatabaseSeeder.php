<?php

namespace Database\Seeders;

use App\Models\Evento;
use App\Models\Subscriber;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role' =>'admin',
            'password' =>'admin'
        ]);

        User::factory(5)->create();
        Subscriber::factory(5)->create();
    }
}
