<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;
class ProjectUser extends Pivot
{
    protected $table = 'project_users';
    public $incrementing = true;
}
