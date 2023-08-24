<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

    public function index(){

        $tutors=User::role('tutor')->where("is_survey_completed",1)->count();
        $students=User::role('student')->where("is_survey_completed",1)->count();

        return view("admin.dashboard.index",compact("tutors","students"));
    }
}
