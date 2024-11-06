<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Work', 'color' => 'ff0000', 'user_id' => 1],
            ['name' => 'Personal', 'color' => '00ff00', 'user_id' => 1],
            ['name' => 'School', 'color' => '0000ff', 'user_id' => 1],
            ['name' => 'Groceries', 'color' => 'ffff00', 'user_id' => 1],
            ['name' => 'Travel', 'color' => 'ff00ff', 'user_id' => 1],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}