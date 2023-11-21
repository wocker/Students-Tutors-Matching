<?php

namespace App\Http\Controllers;

use App\Models\LearningStyle;
use App\Models\PossibleAnswer;
use App\Models\Question;
use App\Models\User;
use App\Models\UserResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SurveyController extends Controller
{
    public function index($type)
    {

        $type=strtolower($type);


        if(!in_array($type,["student","tutor"])){
            abort(404);
        }

        $type=ucfirst($type);




        return view("front.surveys.index",compact("type"));
    }

    public function submitUserInfo(Request $request)
    {
        $request->validate([
            "type" => "required|in:student,tutor",
            "name" => "required",
            "email" => "required|email",
            "age"=>"required",
            "sex"=>"required",
        ]);

        $user=User::where("email",$request->email)->first();



        if($user && $user->responses()->count()>0){

            return response([
                "message" => "¿Quieres continuar con el Cuestionario",
                "data" => [
                    "userExists" => true,
                    "user" => $user,
                ]
            ], 200);

        }

        $user = User::updateOrCreate([
            "email" => $request->email
        ], [
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt("test1234"),
            "age"=>$request->age,
            "sex"=>$request->sex,
        ]);

        $user->assignRole($request->type);

        return response([
            "message" => "Listo para Empezar",
            "data" => [
                "user" => $user,
            ]
        ], 200);
    }


    public function removeUserResponses(Request $request){

        $request->validate([
            "user_id"=>"required|exists:users,id",
        ]);

        UserResponse::where("user_id",$request->user_id)->delete();

        $user=User::find($request->user_id);

        $user->is_survey_completed=0;

        $user->save();

        return response([
            "data" => [
                "user" => $user,
            ]
        ], 200);


    }

    public function getLearningStyle($user_id){

        $user=User::find($user_id);

        return $user->calculateLearningStyle();
    }

    public function possibleAnswers(){

        $answers=PossibleAnswer::orderBy("score","asc")->get();

        $answers=$answers->map(function($answer){
            $answer->answer=$answer->answer;
            return $answer;
        });

        return response([
            "message" => "Answers fetched successfully",
            "data" => [
                "answers" => $answers,
            ]
        ], 200);
    }


    public function getQuestions($user_id,$type,$offset,$limit){
       $questions= Question::where("type", $type)
        // ->whereDoesntHave("responses", function ($query) use ($user_id,) {
        //     $query->where("user_id", $user_id);
        // })
        ->offset($offset)
        ->limit($limit)
        ->get();

        $questions=$questions->map(function($question){
            $question->question=$question->question;
            $question->selectedAnswer=null;
            return $question;
        });

        return $questions;
    }


    public function questions(Request $request)
    {

        $request->validate([
            "offset" => "required|integer",
            "limit" => "required|integer",
            "type" => "required|in:student,tutor",
            "user_id" => "required|exists:users,id",
            "existing_user" => "nullable",
        ]);


        $type = $request->type;
        $offset=$request->offset;
        $limit=$request->limit;
        $user_id=$request->user_id;
        $progress=0;


        if($request->existing_user=="true"){
            // get user responded questions count

            $userResponses=UserResponse::where("user_id",$user_id)->count();


            $offset=$userResponses;

            $progress=$this->calculateProgress($user_id,$request->type);

        }

        Log::info("questions",[
            "offset" => $offset,
            "limit" => $limit,
            "type" => $type,
            "progress" => $progress,
        ]);

        $questions =$this->getQuestions($user_id,$type,$offset,$limit);


        return response([
            "message" => "Questions fetched successfully",
            "data" => [
                "questions" => $questions,
                "progress" => $progress,
                "offset" => intval($offset),
                "limit" => intval($limit),
            ]

        ], 200);
    }


    public function submitAnswers(Request $request){

        $request->validate([
            "user_id" => "required|exists:users,id",
            "questions" => "required|array",
            "questions.*.id" => "required|exists:questions,id",
            "questtions.*.selectedAnswer" => "required|exists:possible_answers,id",
            "offset" => "required|integer",
            "limit" => "required|integer",
            "type" => "required|in:student,tutor",
        ]);

        Log::info("submitAnswers",[
            "request" => $request->all()
        ]);

        $questions=$request->questions;

        $user_id=$request->user_id;
        $responseData=[];

        foreach($questions as $question){

            $responseData[]=[
                "user_id"=>$user_id,
                "question_id"=>$question["id"],
                "possible_answer_id"=>$question["selectedAnswer"],
                "created_at"=>now(),
                "updated_at"=>now(),
            ];

        }

        UserResponse::insert($responseData);

        $userLearningStyle=null;

        $questions=$this->getQuestions($user_id,$request->type,$request->offset,$request->limit);

        if($questions->count()==0){
            $user=User::find($user_id);
            $userLearningStyle=$user->userLearningStyle()["learning_style"];
            $user->is_survey_completed=1;
            $user->save();

        }

        $progress=$this->calculateProgress($user_id,$request->type);

        return response([
            "message" => "Answers submitted successfully",
            "data" => [
                "user_id" => $user_id,
                "questions" => $questions,
                "progress" => $progress,
                "userLearningStyle" => $userLearningStyle,
            ]
        ], 200);
    }

    public function calculateProgress($user_id,$type){

        // total questions of this type
        $questions=Question::where("type",$type)->get();
        $totalQuestions=$questions->count();

        if($totalQuestions==0){
            return 0;
        }

        // total answered questions of this type
        $userResponses=UserResponse::where("user_id",$user_id)->whereIn("question_id",$questions->pluck("id"))->count();



        // progress
        $progress=($userResponses/$totalQuestions)*100;

        return $progress;

    }
}
