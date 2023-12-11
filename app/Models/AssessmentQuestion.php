<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentQuestion extends Model
{
    use HasFactory;
    protected $table = 'assessment_questions';
    public function answers() {
        return $this->hasMany(AssessmentAnswer::class, 'question_id');
    }
    public function job_category(){
        return $this->belongsTo(ProjectCategory::class, 'job_category_id');
    }
}
