<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\Folder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,                    // Genera un título aleatorio para la nota
            'content' => $this->faker->paragraphs(3, true),      // Genera un contenido aleatorio con 3 párrafos
            'folder_id' => Folder::factory(),                 // Asocia la nota a una carpeta generada aleatoriamente
            'user_id' => User::factory(),                      // Asocia la nota a un usuario
        ];
    }
}
