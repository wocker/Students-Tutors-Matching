<?php

namespace Database\Seeders;

use App\Models\TeachingStylePreference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachingStylePreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeachingStylePreference::insert([
            [
                "learning_style_id"=>1,
                "teaching_style_id"=>10,
            ],
            [
                "learning_style_id"=>1,
                "teaching_style_id"=>9,
            ],
            [
                "learning_style_id"=>1,
                "teaching_style_id"=>7,
            ],


            [
                "learning_style_id"=>2,
                "teaching_style_id"=>8,
            ],
            [
                "learning_style_id"=>2,
                "teaching_style_id"=>7,
            ],
            [
                "learning_style_id"=>2,
                "teaching_style_id"=>9,
            ]

            ,
            [
                "learning_style_id"=>3,
                "teaching_style_id"=>10,
            ],
            [
                "learning_style_id"=>3,
                "teaching_style_id"=>9,
            ],
            [
                "learning_style_id"=>3,
                "teaching_style_id"=>7,
            ]

            ,
            [
                "learning_style_id"=>4,
                "teaching_style_id"=>7,
            ],
            [
                "learning_style_id"=>4,
                "teaching_style_id"=>8,
            ]

            ,
            [
                "learning_style_id"=>5,
                "teaching_style_id"=>10,
            ],
            [
                "learning_style_id"=>5,
                "teaching_style_id"=>8,
            ]


            ,
            [
                "learning_style_id"=>6,
                "teaching_style_id"=>9,
            ],
            [
                "learning_style_id"=>6,
                "teaching_style_id"=>7,
            ],
            [
                "learning_style_id"=>6,
                "teaching_style_id"=>8,
            ]
        ]);
    }
}
