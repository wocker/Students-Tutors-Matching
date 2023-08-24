<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'sex',
        "position",
        'is_password_changed'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function responses()
    {
        return $this->hasMany(UserResponse::class, "user_id");
    }

    public function learningStyles()
    {
        $userRole = $this->roles()->first()->name;

        $learningStyles = LearningStyle::where("type", $userRole)->get();

        return $learningStyles;
    }

    public function calculateLearningStyleStudent()
    {


        $questions = Question::where("type", "student")->get();


        $independentStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 1;
        })->count();


        $evitativoStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 2;
        })->count();
        $collaborativeStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 3;
        })->count();
        $dependienteStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 4;
        })->count();
        $competitiveStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 5;
        })->count();
        $participativeStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 6;
        })->count();


        $responses = $this->responses()->whereHas("question")->with("question")->get();


        $totalIndependentResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 1;
        })->sum("possible_answer_id");


        // $totalIndependentResponses = $responses->whereHas("question", function ($query) {
        //     $query->where("learning_style_id", 1);
        // })
        //     ->sum("possible_answer_id");

        $totalEvitativoResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 2;
        })
            ->sum("possible_answer_id");

        $totalCollaborativeResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 3;
        })
            ->sum("possible_answer_id");

        $totalDependienteResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 4;
        })
            ->sum("possible_answer_id");

        $totalCompetitiveResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 5;
        })
            ->sum("possible_answer_id");

        $totalParticipativeResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 6;
        })
            ->sum("possible_answer_id");

        $totalScore = $totalIndependentResponses + $totalEvitativoResponses + $totalCollaborativeResponses + $totalDependienteResponses + $totalCompetitiveResponses + $totalParticipativeResponses;


        $totalAverage = $totalScore / ($independentStyleQuestions + $evitativoStyleQuestions + $collaborativeStyleQuestions + $dependienteStyleQuestions + $competitiveStyleQuestions + $participativeStyleQuestions);


        $independentResponseseAverage = $totalIndependentResponses / $independentStyleQuestions;
        $evitativoResponseseAverage = $totalEvitativoResponses / $evitativoStyleQuestions;
        $collaborativeResponseseAverage = $totalCollaborativeResponses / $collaborativeStyleQuestions;
        $dependienteResponseseAverage = $totalDependienteResponses / $dependienteStyleQuestions;
        $competitiveResponseseAverage = $totalCompetitiveResponses / $competitiveStyleQuestions;
        $participativeResponseseAverage = $totalParticipativeResponses / $participativeStyleQuestions;


        $averages = [
            "independent" => $independentResponseseAverage,
            "evitativo" => $evitativoResponseseAverage,
            "collaborative" => $collaborativeResponseseAverage,
            "dependiente" => $dependienteResponseseAverage,
            "competitive" => $competitiveResponseseAverage,
            "participative" => $participativeResponseseAverage,

        ];

        // determine the learning style based on the learning style with the highest average

        $learningStyleId = null;
        $highestAverage = 0;

        if ($independentResponseseAverage > $highestAverage) {
            $highestAverage = $independentResponseseAverage;
            $learningStyleId = 1;
        }

        if ($evitativoResponseseAverage > $highestAverage) {
            $highestAverage = $evitativoResponseseAverage;
            $learningStyleId = 2;
        }

        if ($collaborativeResponseseAverage > $highestAverage) {
            $highestAverage = $collaborativeResponseseAverage;
            $learningStyleId = 3;
        }

        if ($dependienteResponseseAverage > $highestAverage) {
            $highestAverage = $dependienteResponseseAverage;
            $learningStyleId = 4;
        }

        if ($competitiveResponseseAverage > $highestAverage) {
            $highestAverage = $competitiveResponseseAverage;
            $learningStyleId = 5;
        }

        if ($participativeResponseseAverage > $highestAverage) {
            $highestAverage = $participativeResponseseAverage;
            $learningStyleId = 6;
        }



        $learningStyle = LearningStyle::find($learningStyleId);

        if ($learningStyle) {
            $learningStyle->info = $learningStyle->info;
            $learningStyle->image = asset($learningStyle->image);
            $learningStyle->style= $learningStyle->style;
            $learningStyle->characteristics=$learningStyle->characteristics;
            $learningStyle->recommendedTechniques=$learningStyle->recommendedTechniques;
        }


        $standardDaviations = [];

        $independentResponseseSD = $highestAverage - $independentResponseseAverage;
        $evitativoResponseseSD = $highestAverage - $evitativoResponseseAverage;
        $collaborativeResponseseSD = $highestAverage - $collaborativeResponseseAverage;
        $dependienteResponseseSD = $highestAverage - $dependienteResponseseAverage;
        $competitiveResponseseSD = $highestAverage - $competitiveResponseseAverage;
        $participativeResponseseSD = $highestAverage - $participativeResponseseAverage;


        $totalVariation = ($independentResponseseSD + $evitativoResponseseSD + $collaborativeResponseseSD + $dependienteResponseseSD + $competitiveResponseseSD + $participativeResponseseSD);


        $standardDaviations = [
            "independent" => $independentResponseseSD,
            "evitativo" => $evitativoResponseseSD,
            "collaborative" => $collaborativeResponseseSD,
            "dependiente" => $dependienteResponseseSD,
            "competitive" => $competitiveResponseseSD,
            "participative" => $participativeResponseseSD,

        ];

        $totalSD = ($independentResponseseSD + $evitativoResponseseSD + $collaborativeResponseseSD + $dependienteResponseseSD + $competitiveResponseseSD + $participativeResponseseSD);


        return [
            "learning_style" => $learningStyle,
            "averages" => $averages,
            "total_score" => $totalScore,
            "total_average" => $totalAverage,
            "total_variation" => $totalVariation,
            "standard_daviations" => $standardDaviations,
            "total_sd" => $totalSD,
        ];
    }

    public function calculateLearningStyleTutor()
    {


        $questions = Question::where("type", "tutor")->get();


        $expertStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 7;
        })->count();


        $formalAuthorityStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 8;
        })->count();
        $personalModelStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 9;
        })->count();
        $facilitatorStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 10;
        })->count();
        $delegadorStyleQuestions = $questions->filter(function ($question) {
            return $question->learning_style_id == 11;
        })->count();



        $responses = $this->responses()->whereHas("question")->with("question")->get();




        $totalexpertResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 7;
        })
            ->sum("possible_answer_id");

        $totalformalAuthorityResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 8;
        })
            ->sum("possible_answer_id");

        $totalpersonalModelResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 9;
        })
            ->sum("possible_answer_id");

        $totalfacilitatorResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 10;
        })
            ->sum("possible_answer_id");

        $totaldelegadorResponses = $responses->filter(function ($response) {
            return $response->question->learning_style_id == 11;
        })
            ->sum("possible_answer_id");


        $totalScore = $totalexpertResponses + $totalformalAuthorityResponses + $totalpersonalModelResponses + $totalfacilitatorResponses + $totaldelegadorResponses;

        $totalAverage = $totalScore / ($expertStyleQuestions + $formalAuthorityStyleQuestions + $personalModelStyleQuestions + $facilitatorStyleQuestions + $delegadorStyleQuestions);



        $expertResponseseAverage = $totalexpertResponses / $expertStyleQuestions;
        $formalAuthorityResponseseAverage = $totalformalAuthorityResponses / $formalAuthorityStyleQuestions;
        $personalModelResponseseAverage = $totalpersonalModelResponses / $personalModelStyleQuestions;
        $facilitatorResponseseAverage = $totalfacilitatorResponses / $facilitatorStyleQuestions;
        $delegadorResponseseAverage = $totaldelegadorResponses / $delegadorStyleQuestions;


        $averages = [
            "expert" => $expertResponseseAverage,
            "formalAuthority" => $formalAuthorityResponseseAverage,
            "personalModel" => $personalModelResponseseAverage,
            "facilitator" => $facilitatorResponseseAverage,
            "delegador" => $delegadorResponseseAverage,

        ];


        // determine the learning style based on the learning style with the highest average

        $learningStyleId = null;
        $highestAverage = 0;

        if ($expertResponseseAverage > $highestAverage) {
            $highestAverage = $expertResponseseAverage;
            $learningStyleId = 7;
        }

        if ($formalAuthorityResponseseAverage > $highestAverage) {
            $highestAverage = $formalAuthorityResponseseAverage;
            $learningStyleId = 8;
        }

        if ($personalModelResponseseAverage > $highestAverage) {
            $highestAverage = $personalModelResponseseAverage;
            $learningStyleId = 9;
        }

        if ($facilitatorResponseseAverage > $highestAverage) {
            $highestAverage = $facilitatorResponseseAverage;
            $learningStyleId = 10;
        }

        if ($delegadorResponseseAverage > $highestAverage) {
            $highestAverage = $delegadorResponseseAverage;
            $learningStyleId = 11;
        }




        $learningStyle = LearningStyle::find($learningStyleId);

        if ($learningStyle) {
            $learningStyle->info = $learningStyle->info;
            $learningStyle->image = asset($learningStyle->image);
            $learningStyle->style= $learningStyle->style;
            $learningStyle->characteristics=$learningStyle->characteristics;
            $learningStyle->recommendedTechniques=$learningStyle->recommendedTechniques;

        }


        $standardDaviations = [];

        $expertResponseseSD = $highestAverage - $expertResponseseAverage;
        $formalAuthorityResponseseSD = $highestAverage - $formalAuthorityResponseseAverage;
        $personalModelResponseseSD = $highestAverage - $personalModelResponseseAverage;
        $facilitatorResponseseSD = $highestAverage - $facilitatorResponseseAverage;
        $delegadorResponseseSD = $highestAverage - $delegadorResponseseAverage;

        $totalVariation = ($expertResponseseSD + $formalAuthorityResponseseSD + $personalModelResponseseSD + $facilitatorResponseseSD + $delegadorResponseseSD);

        $standardDaviations = [
            "expert" => $expertResponseseSD,
            "formalAuthority" => $formalAuthorityResponseseSD,
            "personalModel" => $personalModelResponseseSD,
            "facilitator" => $facilitatorResponseseSD,
            "delegador" => $delegadorResponseseSD,

        ];

        $totalSD = ($expertResponseseSD + $formalAuthorityResponseseSD + $personalModelResponseseSD + $facilitatorResponseseSD + $delegadorResponseseSD);


        return [
            "learning_style" => $learningStyle,
            "total_score" => $totalScore,
            "total_average" => $totalAverage,
            "total_variation" => $totalVariation,
            "averages" => $averages,
            "standard_daviations" => $standardDaviations,
            "total_sd" => $totalSD,
        ];
    }


    public function userLearningStyle()
    {
        $userRole = $this->roles()->first()->name;

        if ($userRole == "student") {
            return $this->calculateLearningStyleStudent();
        } else {
            return $this->calculateLearningStyleTutor();
        }
    }
}
