<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Lesson::factory()
            ->count(15)
            ->sequence(
                ['name' => 'Algebra I'],
                ['name' => 'Algebra II'],
                ['name' => 'Algebra III'],
                ['name' => 'Algebra IV'],
                ['name' => 'Matematicas Discretas I'],
                ['name' => 'Matematicas Discretas II'],
                ['name' => 'Programacion I'],
                ['name' => 'Programacion II'],
                ['name' => 'Programacion III'],
                ['name' => 'Programacion IV'],
                ['name' => 'Programacion V'],
                ['name' => 'Programacion VI'],
                ['name' => 'Ingles I'],
                ['name' => 'Ingles II'],
                ['name' => 'Ingles III'],
            )
            ->create();
    }
}
