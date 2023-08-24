<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $append=["question"];

    public function learningStyle()
    {
        return $this->belongsTo(LearningStyle::class);
    }

    public function questionTypes(){
        return [
            "tutor" => "tutor",
            "student" => "student",
        ];
    }

    public function responses(){
        return $this->hasMany(UserResponse::class,"question_id");
    }

    public function getQuestionAttribute(){
        return $this->{"question_".app()->getLocale()};
    }

    public function tutorQuestions(){
        return $this->where("type","tutor")->get();
    }

    public function studentQuestions(){
        return $this->where("type","student")->get();
    }
}
