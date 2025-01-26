<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\CustomerPackagesController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\VerifyEmailController;


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

Auth::routes(['verify'=> true]);


//Veriication notice route
Route::get('/email/verify', function(){
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');


// Email verification handling
Route::get('/email/verify/{id}/{hash}',[VerifyEmailController::class,'verify'])
    ->middleware(['auth','signed'])->name('verification.verify');



Route::post('/email/resent',function(){
    Auth::user()->sendEmailVerificationNotification();
    return back()->with('status','Verification link sent !');
})->middleware(['auth','throttles:6,1'])->name('verfication.resend');


//KW - routes controler which page is shown when users visit a specific page.
Route::get('/', 'App\Http\Controllers\PagesController@index');//KW Route to homepage of application.

Route::get('/about', 'App\Http\Controllers\PagesController@about');//KW Route to about pafe of application.

Route::get('/services', 'App\Http\Controllers\PagesController@services');//KW Route to services page of application.

Route::get('/show-pdf/{id}','App\Http\Controllers\PagesController@viewpdf');//KW route for viewing the customer's uploaded pdf.

Route::get('/show-bill/{trackingnumber}','App\Http\Controllers\PagesController@viewbill');


Route::get('/managepackages/create/{id}','App\Http\Controllers\ManagePackagesTest@create');
// Route::get('/managepackages/store/{id}','App\Http\Controllers\ManagePackagesTest@store');



//KW route for creating invoice.
Route::get('/invoicemanagement/createinvoice/{id}','App\Http\Controllers\InvoiceController@createInvoice');







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Kw - creating a route for each function that exists in the CustomerPackagesController


Route::middleware(['auth','verified'])->group(function (){
   
});

Route::resource('customerpackage','App\Http\Controllers\CustomerPackagesController');//KW full path name is needed.



Route::resource('managepackages','App\Http\Controllers\ManagePackagesController');
Route::resource('inventorymanagement','App\Http\Controllers\InventoryManagementController');
Route::resource('invoicemanagement','App\Http\Controllers\ModifyInvoiceController');
Route::resource('shipmentreport','App\Http\Controllers\ShipmentReportController');
Route::resource('manageaccounts','App\Http\Controllers\ManageAccountsController');




