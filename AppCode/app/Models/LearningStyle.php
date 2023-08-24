<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningStyle extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $append=["info","style"];

    public function getInfoAttribute()
    {
        return $this->{"info_".app()->getLocale()};
    }

    public function getStyleAttribute()
    {
        return $this->{"style_".app()->getLocale()};
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function characteristics()
    {
        return $this->hasMany(LearningStyleCharacteristic::class,"learning_style_id");
    }

    public function recommendedTechniques()
    {
        return $this->hasMany(LearningStyleRecommendedTechnique::class,"learning_style_id");
    }


}
