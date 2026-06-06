<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolLevel;

class SchoolLevelSeeder extends Seeder
{
    public function run(): void
    {
        $levels = [

            '6ème',
            '5ème',
            '4ème',
            '3ème',

            'Seconde',
            'Première',
            'Terminale',

            'BTS',
            'Licence',
            'Master',

            'Adulte'
        ];

        foreach ($levels as $index => $level) {

            SchoolLevel::create([
                'name' => $level,
                'slug' => \Illuminate\Support\Str::slug($level),
                'sort_order' => $index + 1,
            ]);
        }
    }
}