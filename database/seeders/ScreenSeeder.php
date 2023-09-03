<?php

namespace Database\Seeders;

use App\Models\Screen;
use Illuminate\Database\Seeder;

class ScreenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => __('Screen 1'),
                'created_at' => now(),
            ],
            [
                'name' => __('Screen 2'),
                'created_at' => now(),
            ],
            [
                'name' => __('Screen 3'),
                'created_at' => now(),
            ],
            [
                'name' => __('Screen 4'),
                'created_at' => now(),
            ],
        ];

        Screen::insert($data);
    }
}
