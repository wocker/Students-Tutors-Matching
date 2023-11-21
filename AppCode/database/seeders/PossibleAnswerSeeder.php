<?php

namespace Database\Seeders;

use App\Models\PossibleAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PossibleAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PossibleAnswer::insert([
            [
                "answer_es"=>"Totalmente en desacuerdo",
                "answer_en"=>"Strongly disagree",
                "score"=>1,
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "answer_es"=>"Moderadamente en desacuerdo",
                "answer_en"=>"Moderately disagree",
                "score"=>2,
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "answer_es"=>"Indeciso",
                "answer_en"=>"Undecided",
                "score"=>3,
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "answer_es"=>"Moderadamente de acuerdo",
                "answer_en"=>"Moderately agree",
                "score"=>4,
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "answer_es"=>"Totalmente de acuerdo",
                "answer_en"=>"Strongly agree",
                "score"=>5,
                "created_at"=>now(),
                "updated_at"=>now()
            ]
        ]);
    }
}
