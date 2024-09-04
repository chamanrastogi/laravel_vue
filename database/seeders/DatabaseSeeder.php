<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
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
        // $this->call(ClassesSeeder::class);
        // $this->call(SectionsSeeder::class);
        // $this->call(StudentsSeeder::class);
        // User::factory(10)->create();
        User::factory(1)->create();
       // Student::factory(20)->create();
        //Classes::factory(10)->create();
      //  Section::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
