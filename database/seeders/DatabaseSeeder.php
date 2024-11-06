<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Folder;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            FolderSeeder::class
        ]);

          // Genera 100 notas usando NoteFactory
          Note::factory(100)->create();
    }
}
