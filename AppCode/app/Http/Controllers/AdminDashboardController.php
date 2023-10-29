<?php

namespace App\Http\Controllers;

use App\Models\StudentCluster;
use App\Models\TeachingStylePreference;
use App\Models\TutorCluster;
use App\Models\User;
use App\Models\UserResponse;
use App\Models\UserScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{

    public function index(){



        $tutors=User::role('tutor')->where("is_survey_completed",1)->count();
        $students=User::role('student')->where("is_survey_completed",1)->count();

        return view("admin.dashboard.index",compact("tutors","students"));
    }


    public function test(){

        $students=User::role('student')->where("is_survey_completed",1)->get();
        $tutors=User::role('tutor')->where("is_survey_completed",1)->get();

        $teachingStylePreferences=TeachingStylePreference::all();

        $groups=[];

        $tutorsGroup=[];


        foreach($tutors as $tutor){


            $learningStyle = $tutor->userLearningStyle()["learning_style"];

            if($learningStyle){
            $tutorsGroup[$learningStyle->id][]=[
                "name"=>$tutor->name,
                "tutor_id"=>$tutor->id,
                "learning_style_id"=>$learningStyle->id,
                "learning_style_name"=>$learningStyle->style_en
            ];}

        }


        foreach($students as $student){

            $learningStyle = $student->userLearningStyle()["learning_style"];


            if($learningStyle){

            $preferedTeachingStyles = $teachingStylePreferences->where("learning_style_id", $learningStyle->id)->pluck("teaching_style_id")->toArray();


            foreach($preferedTeachingStyles as $preferedTeachingStyle){

                if(isset($tutorsGroup[$preferedTeachingStyle])){
                    $tutor=$tutorsGroup[$preferedTeachingStyle][0];


                    $groups[$tutor["tutor_id"]][]=[
                        "student_id"=>$student->id,
                        "student_name"=>$student->name,
                        "learning_style_id"=>$learningStyle->id,
                        "learning_style_name"=>$learningStyle->style_en,
                        "tutor_id"=>$tutor["tutor_id"],
                        "tutor_name"=>$tutor["name"],
                        "tutor_learning_style_id"=>$tutor["learning_style_id"],
                        "tutor_learning_style_name"=>$tutor["learning_style_name"],
                    ];

                    break;
                }


            }
        }

            // dd($tutorsGroup[$learningStyle->id])




        }

        dd($groups);


        dd($tutorsGroup);



    }

    public function makeGroups(){



        $studentClusters=[];

        foreach($students as $student){

            $studentDominantStylesArr= UserScore::where("user_id",$student->id)->get();


            $studentDominantStylesArr=$studentDominantStylesArr->sortByDesc("score")->take(1);

            $studentDominantStyle=$studentDominantStylesArr->first();



            $studentDominantStyleId=$studentDominantStyle->learning_style_id;

            $studentCluster=StudentCluster::where("learning_style_id",$studentDominantStyleId)->first();

            $student->cluster_id=$studentCluster->cluster_id;

            $studentClusters[]=[
                "name"=>$student->name,
                "student_id"=>$student->id,
                "cluster_id"=>$studentCluster->cluster_id
            ];

        }

        $tutorClusters=[];

        foreach($tutors as $tutor){


            $tutorDominantStylesArr= UserScore::where("user_id",$tutor->id)->get();

            $tutorDominantStylesArr=$tutorDominantStylesArr->sortByDesc("score")->take(1);

            $tutorDominantStyle=$tutorDominantStylesArr->first();




            $tutorDominantStyleId=$tutorDominantStyle->learning_style_id;

            $tutorCluster=TutorCluster::where("learning_style_id",$tutorDominantStyleId)->get();


            $tutorClusters[]=[
                "name"=>$tutor->name,
                "tutor_id"=>$tutor->id,
                "cluster_ids"=>$tutorCluster->pluck('cluster_id')->toArray()
            ];

        }


        $groups=[];

        foreach($students as $student){

            // get that tutor who has same cluster id as student from tutorClusters array

            $tutor=null;
            $smallestPosition=100;

            foreach(($tutorClusters) as $tutorCluster){


                // check if student cluster id is in tutor cluster ids and if it is then check which position it is in tutor cluster ids array

                $clustor_ids=($tutorCluster["cluster_ids"]);

                if(in_array($student->cluster_id,$clustor_ids)){

                    $position=array_search($student->cluster_id,$clustor_ids);

                    if($position<$smallestPosition){
                        $smallestPosition=$position;
                        $tutor=User::find($tutorCluster["tutor_id"]);
                    }

                }



            }





            if($tutor){

                $groups[]=[
                    "tutor_id"=>$tutor->id,
                    "tutor_name"=>$tutor->name,
                    "student_id"=>$student->id,
                    "student_name"=>$student->name,
                ];

            }


        }

dd($studentClusters,$tutorClusters,$groups);

    }

    public function deleteAll(Request $request){


        $request->validate([
            "type"=>"required|in:tutor,student",
            "password"=>"required"
        ]);


        $user=auth()->user();

        // match password
        if(!Hash::check($request->password,$user->password)){
            return response()->json([
                "statusText"=>"Contraseña incorrecta",
                "message"=>"Contraseña incorrecta"
            ],422);
        }

        $type=$request->type;

        // get all users
        $users=User::role($type)->get();
        $ids=$users->pluck("id")->toArray();

        // delete all users responses
        UserResponse::whereIn("user_id",$ids)->delete();

        // delete all users
        User::whereIn("id",$ids)->delete();


        return response()->json([
            "message"=>"Se han eliminado todos los $type"
        ]);

    }
}
