<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserCreditCard extends Model
{
    use HasFactory,SoftDeletes,Notifiable;
    
    protected $table = "user_credit_cards";

    protected $fillable = [
        'user_id',
        'stripe_payment_method_id',
        'exp_month',
        'exp_year',
        'brand',
        'last_four',
        
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}