<?php
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminGroupingController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminTutorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['reset' => false, 'verify' => true,"register"=>"false"]);

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(["check.locale"]);

Route::get('lang-change', [HomeController::class, 'langChange'])->name('home.langChange');


Route::prefix("survey")->middleware(["check.locale"])->name("survey.")->group(function () {

    Route::get("questions", [SurveyController::class, "questions"])->name("questions");
    Route::get("possible-answers", [SurveyController::class, "possibleAnswers"])->name("possible-answers");

    Route::get("{type}", [SurveyController::class, "index"])->name("index");

    Route::post("submit-user-info", [SurveyController::class, "submitUserInfo"])->name("submit-user-info");

    Route::post("remove-user-responses", [SurveyController::class, "removeUserResponses"])->name("remove-user-responses");

    Route::post("submit-answers", [SurveyController::class, "submitAnswers"])->name("submit-answers");
});


Route::middleware(["auth","check.locale"])->group(function () {

    Route::prefix("admin")->name("admin.")->group(function(){

        Route::resource("admin/profile",AdminProfileController::class)->only(["index","update"]);

    });


    Route::prefix("admin")->name("admin.")->middleware(["check.is_password_changed"])->group(function(){

        Route::post("dashboard/delete-all",[AdminDashboardController::class,"deleteAll"])->name("dashboard.deleteAll");

        Route::get("",[AdminDashboardController::class,"index"])->name("dashboard.index");

        Route::get("test",[AdminDashboardController::class,"test"])->name("dashboard.test");


        Route::resource("tutors",AdminTutorController::class)->only(["index","destroy"]);
        Route::resource("students",AdminStudentController::class)->only(["index","destroy"]);

        Route::resource('grouping',AdminGroupingController::class)->only(["index"]);
    });
});
