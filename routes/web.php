<?php

use App\Http\Controllers\demoController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\singleActionControoler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\customerRegistrationController;
use App\Models\Table_customers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| contains the "web" middleware group. Now create something great!
|
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',[demoController::class,'index']);
// // other mentod but bad practice
// Route::get('/about','App\Http\Controllers\demoController@about');
// Route::get('/course',singleActionControoler::class);
// Route::resource('/photos',photoController::class);

Route::get('/register',[registrationController::class,'index']);
Route::post('/register',[registrationController::class,'register']);
Route::get('/customer',function(){
$customer = Table_customers::all();
echo '<pre>';
echo print_r($customer->toArray());
echo '</pre>';


});

Route::get('/customerregister',[customerRegistrationController::class,'index']);
Route::post('/customerregister',[customerRegistrationController::class,'store']);
Route::get('customer/view',[customerRegistrationController::class,'view']);
Route::get('/customer/delete/{id}',[customerRegistrationController::class,'delete'])->name('customer.delete');
