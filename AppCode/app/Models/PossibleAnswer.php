<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PossibleAnswer extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $append=["answer"];

    public function getAnswerAttribute()
    {
        return $this->{"answer_".app()->getLocale()};
    }

}
