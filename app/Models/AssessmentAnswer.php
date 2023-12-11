<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentAnswer extends Model
{
    use HasFactory;
    public function question() {
        return $this->belongsTo(AssessmentQuestion::class, 'question_id');
    }
}
