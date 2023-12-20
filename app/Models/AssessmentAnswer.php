<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentAnswer extends Model
{
    use HasFactory;
    protected $guarded = ['id','updated_at','created_at'];

    public function question() {
        return $this->belongsTo(AssessmentQuestion::class, 'assessment_question_id');
    }
}
