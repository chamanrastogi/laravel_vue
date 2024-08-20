<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                'name' => 'Class 1',
            ],
            [
                'name' => 'Class 2',
            ],
            [
                'name' => 'Class 3',
            ],
            [
                'name' => 'Class 4',
            ],
            [
                'name' => 'Class 5',
            ],
        ];
        Classes::insert($classes);
    }
}
