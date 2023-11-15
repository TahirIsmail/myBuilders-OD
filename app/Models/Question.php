<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public function answers() {
        return $this->hasMany(Answer::class, 'question_id');
    }
    public function job_category(){
        return $this->belongsTo(ProjectCategory::class, 'job_category_id');
    }
}
