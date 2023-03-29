<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            'Blockchain',
            'AWS',
            'Node.js',
            'Docker',
            'Apache '
        ];

        foreach($technologies as $technology) {

            Technology::create([

                'name' => $technology

            ]);

        }
    }
}
