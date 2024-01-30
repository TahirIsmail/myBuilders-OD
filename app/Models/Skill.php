<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes;
    public function project_category()
    {
        return $this->belongsTo(ProjectCategory::class)->withTrashed();
    }
}
