<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Service;

class ProjectCategory extends Model
{
    use SoftDeletes;
    protected $guarded = ['create_at', 'update_at', 'id'];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'project_cat_id');
    }
    
    
    public function firstquestion()
    {
        return $this->hasOne(Question::class,'job_category_id')->oldestOfMany();
    }
    public function questions(){
        return $this->hasMany(Question::class, 'job_category_id');
    }
}
