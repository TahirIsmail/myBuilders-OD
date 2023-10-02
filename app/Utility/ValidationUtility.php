<?php

namespace App\Utility;
use App\Models\Service;
use App\Models\ServicePackage;
use Auth;

class ValidationUtility
{
   public static function get_service_validation_rules()
   {
       return [
           'title' => 'required',
           'about_service' => 'required',
           'category_id' => 'required',
           'basic_price' => 'required|numeric',
           'basic_delivery_time' => 'required',
           'basic_revision_limit' => 'required',
           'basic_included_description' => 'required',
       ];
   }

   public static function get_service_validation_message()
   {
       return [
           'title.required' => translate('Title is required.'),
           'about_service.required' => translate('About Service is required.'),
           'category_id.required' => translate('Category is required.'),
           'basic_price.required' => translate('Basic Price is required.'),
           'standard_price.numeric' => translate('Standard Price should be a number.'),
           'basic_price.numeric' => translate('Basic price should be a number.'),
           'premium_price.numeric' => translate('Premium price should be a number.'),
           'basic_delivery_time.required' => translate('Basic delivery time limit field is requried.'),
           'basic_revision_limit.required' => translate('Basic Revision limit is required.'),
       ];
   }
}
