<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployTradesmenController extends Controller
{
    //

    public function index(){
    
        return  view('frontend.default.user.freelancer.trade_career.post_advertisement_content');
    }
}
