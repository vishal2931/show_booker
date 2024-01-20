<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Screen;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Avengers : End Game',
                'type' => 'Action',
                'release_date' => fake()->dateTimeBetween('now', '+1 Year')->format('Y-m-d'),
                'duration' => fake()->numberBetween(1, 3),
                'screens' => json_encode(Screen::inRandomOrder()->limit(2)->pluck('id'), true),
                'created_at' => now(),
            ],
            [
                'name' => 'Avengers : Infinity War',
                'type' => 'Action & Thriller',
                'release_date' => fake()->dateTimeBetween('now', '+1 Year')->format('Y-m-d'),
                'duration' => fake()->numberBetween(1, 3),
                'screens' => json_encode(Screen::inRandomOrder()->limit(2)->pluck('id'), true),
                'created_at' => now(),
            ],
            [
                'name' => 'Daredevils',
                'type' => 'Thriller',
                'release_date' => fake()->dateTimeBetween('now', '+1 Year')->format('Y-m-d'),
                'duration' => fake()->numberBetween(1, 3),
                'screens' => json_encode(Screen::inRandomOrder()->limit(2)->pluck('id'), true),
                'created_at' => now(),
            ],
            [
                'name' => 'Cars',
                'type' => 'Comedy',
                'release_date' => fake()->dateTimeBetween('now', '+1 Year')->format('Y-m-d'),
                'duration' => fake()->numberBetween(1, 3),
                'screens' => json_encode(Screen::inRandomOrder()->limit(2)->pluck('id'), true),
                'created_at' => now(),
            ],
        ];
        Movie::insert($data);
    }
}
