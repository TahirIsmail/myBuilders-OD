<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectCategory;
class TradingInfo extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'trading_info';
    protected $fillable = [
        'partnersname',
        'trade_name',
        'operating_as',
        'trade_regd_name',
        'cmp_regd_no',
        'user_id'
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
