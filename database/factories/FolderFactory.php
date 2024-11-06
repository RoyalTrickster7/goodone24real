<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Folder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Folder>
 */
class FolderFactory extends Factory
{
    protected $model = Folder::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,          // Genera un nombre aleatorio para la carpeta
            'user_id' => User::factory(),          // Asocia la carpeta a un usuario aleatorio
            'categories_id' => Category::factory(), // Genera una categoría asociada
        ];
    }
}
