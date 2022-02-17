<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
           ['name' => 'Hatchback', 'slug' => 'hatchback', 'created_at' => $now, 'updated_at' => $now],
           ['name' => 'Sedan', 'slug' => 'sedan', 'created_at' => $now, 'updated_at' => $now],
           ['name' => 'MPV', 'slug' => 'mpv', 'created_at' => $now, 'updated_at' => $now],
           ['name' => 'SUV', 'slug' => 'suv', 'created_at' => $now, 'updated_at' => $now],
           ['name' => 'Crossover', 'slug' => 'crossover', 'created_at' => $now, 'updated_at' => $now]

        ]);
    }
}
