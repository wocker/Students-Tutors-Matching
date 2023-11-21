<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningStyleCharacteristic extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function learningStyle()
    {
        return $this->belongsTo(LearningStyle::class);
    }
}
