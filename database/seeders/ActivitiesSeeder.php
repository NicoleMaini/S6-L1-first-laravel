<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('activities')->insert([
                'title' => fake()->words(rand(3, 7), true),
                'hour' => fake()->time(),
                'date' => fake()->dateTime(),
                'description' => fake()->paragraph(rand(2, 5), false),
            ]);
        }
    }
}
