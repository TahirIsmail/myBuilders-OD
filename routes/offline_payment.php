<?php

/*
|--------------------------------------------------------------------------
| Offline Payment Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin
Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::resource('manual_payment_methods','App\Http\Controllers\Payment\ManualPaymentMethodController');
    Route::get('/manual_payment_methods/destroy/{id}', 'App\Http\Controllers\Payment\ManualPaymentMethodController@destroy')->name('manual_payment_methods.destroy');

    Route::get('/manual_package_payments_history', 'App\Http\Controllers\Payment\PackagePaymentController@manual_package_payments_history')->name('offline_package_payments_history');
    Route::get('/manual_package_payment/approve/{id}', 'App\Http\Controllers\Payment\PackagePaymentController@approve_offline_package_payment')->name('offline_package_payment.approve');

    Route::get('/offline_service_payments_history', 'App\Http\Controllers\Payment\ServicePaymentController@offline_service_payments_history')->name('offline_service_payments_history');
    Route::get('/offline_service_payment/approve/{id}', 'App\Http\Controllers\Payment\ServicePaymentController@approve_offline_service_payment')->name('offline_service_payment.approve');

    Route::get('/offline_project_payments_history', 'App\Http\Controllers\Payment\MilestonePaymentController@offline_project_payments_history')->name('offline_project_payments_history');
    Route::get('/offline_projoct_payment/approve/{id}', 'App\Http\Controllers\Payment\MilestonePaymentController@approve_offline_project_payment')->name('offline_project_payment.approve');


});

Route::group(['middleware' => ['user']], function(){
    Route::post('/package/get-offline-package-purchase-modal', 'App\Http\Controllers\Payment\ManualPaymentMethodController@get_offline_package_purchase_modal')->name('offline_package_purchase_modal');
    Route::post('/offline-package-paymnet', 'App\Http\Controllers\Payment\PackagePaymentController@purchase_package_offline')->name('make_offline_package_payment');

    Route::post('/get-offline-service-purchase-modal', 'App\Http\Controllers\Payment\ManualPaymentMethodController@get_offline_service_package_purchase_modal')->name('offline_service_package_purchase_modal');
    Route::post('/offline-service-package-paymnet', 'App\Http\Controllers\Payment\ServicePaymentController@purchase_service_package_offline')->name('make_offline_service_package_payment');

    Route::post('/get-offline-milestone-payment-modal', 'App\Http\Controllers\Payment\ManualPaymentMethodController@get_offline_milestone_payment_modal')->name('offline_milestone_payment_modal');
    Route::post('/offline-milestone-payment', 'MilestonePaymentController@offline_milestone_payment_to_admin')->name('offline_milestone_payment_to_admin');

});
