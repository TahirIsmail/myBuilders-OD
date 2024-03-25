<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradeCareerController extends Controller
{
    


     function post_advertisement(){
       
        return view('frontend.default.user.freelancer.trade_career.post_advertisement_content');
    }

    function company_profile(){
       
        return view('frontend.default.user.freelancer.trade_career.company_profile');
    }
}
