<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Admin Details:
Email: admin@deepeepharmacy.com
Password: @DeePee22
*/

Route::get('/', function () {
	$current_h = 'current_page_item current-menu-item';
    return view('welcome',compact('current_h'));
})->name('home');

Route::get('about-us', function () {
	$title = "About D'Preferred &#8211; Pharmacy & Stores Ltd.";
	$current_a = 'current_page_item current-menu-item';
    return view('about-us',compact('title','current_a'));
})->name('about');

Route::get('services', function () {
	$title = 'DeePee | Our Services';
	$current_s = 'current_page_item current-menu-item';
    return view('our-services',compact('title','current_s'));
})->name('services');

Route::get('contact-us', function () {
	$title = 'DeePee | Contact Us';
	$current_c = 'current_page_item current-menu-item';
    return view('contact-us',compact('title','current_c'));
})->name('contact-us');

//public drugs access routes
Route::any('know-your-drugs','DrugController@find')->name('drugs');
Route::get('find_drug', 'DrugController@search')->name('find_drug');

//Appointment routes
Route::post('save-appointment','AppointmentController@store')->name('save-appt');
Route::post('save-email', 'AppointmentController@saveEmail')->name('save-email');
Route::post('save-contact','AppointmentController@saveContact')->name('save-contact');

// Auth Routes
Route::get('login', 'AuthController@showLoginFrm')->name('login');
Route::post('login', 'AuthController@login');

//Cart Routes
Route::post('add-to-cart','CartController@addToCart')->name('add');
Route::get('remove', 'CartController@removeItem')->name('remove');
Route::post('on-delivery', 'CartController@processOrder')->name('on_delivery');
Route::get('clear-cart', 'CartController@clearCart')->name('clear');

// paystack gateway
Route::post('paystack/pay', 'CartController@redirectToGateway')->name('pay');
Route::get('payment/callback', 'CartController@handleGatewayCallback');

Route::group(['middleware'=>'auth:web'], function(){
	Route::get('logout', 'DashboardController@logout')->name('logout');
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('add-drug', 'DrugController@create')->name('add-drug');
	Route::post('add-drug', 'DrugController@store');
	Route::get('drugs', 'DrugController@index')->name('all-drugs');
	Route::get('drug/{id}/edit', 'DrugController@edit')->name('edit-drug');
	Route::post('drug/{id}/edit', 'DrugController@update');
	Route::get('destroy_drug', 'DrugController@destroy')->name('del_drug');

	//PrescriptionRoutes
	Route::get('prescriptions', 'PrescriptionController@index')->name('all-prescs');
	Route::get('add-prescription', 'PrescriptionController@create')->name('add-presc');
	Route::post('store_presc', 'PrescriptionController@store')->name('store_presc');
	Route::get('download/{id}', 'PrescriptionController@download')->name('download');
	Route::get('prescription/{id}/edit', 'PrescriptionController@edit')->name('edit-presc');
	Route::post('prescription/update', 'PrescriptionController@update')->name('update_presc');
	Route::any('remove/drug', 'PrescriptionController@removeDrugItem')->name('remove_drug');
	Route::any('remove/prescription', 'PrescriptionController@destroy')->name('remove_presc');

	//Appointments
	Route::get('appointments', 'AppointmentController@index')->name('appts');
	Route::get('appointment/{id}/unapprove', 'AppointmentController@unapprove')->name('unapprove');
	Route::get('appointment/{id}/approve', 'AppointmentController@approve')->name('approve');

	//Orders
	Route::get('all-orders','CartController@allOrders')->name('orders');
	Route::get('confirm/order/{id}', 'CartController@confirmOrder')->name('confirm');

	Route::get('emails','DashboardController@getEmails')->name('emails');
	Route::get('export-emails','DashboardController@exportEmails')->name('export');

	//payments
	Route::get('all-payments', 'CartController@payments')->name('payments');
});
