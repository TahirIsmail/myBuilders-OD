<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradingInfo extends Model
{
    use HasFactory;
    protected $guarded = ['created_at','updated_at','id','deleted_at'];
    protected $table = ['trading_info'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
