<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{

    public function index(){

        $tutors=User::role('tutor')->where("is_survey_completed",1)->count();
        $students=User::role('student')->where("is_survey_completed",1)->count();

        return view("admin.dashboard.index",compact("tutors","students"));
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
