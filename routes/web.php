<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookRegController;
use App\Http\Controllers\BookLoginController;

use App\Http\Middleware\UserAuth;
// use App\Mail\SampleMail;

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


// Route::post('log',[BookLoginController::class,'login']);
// Route::view('login','login');

// Route::post('reg',[BookRegController::class,'register']);
// Route::view('register','register');

// Route::get('logout', function () {
// session()->pull('LoggedUser');
//     return redirect('/login');
// });

// Route::get('/', function () {
//     return new SampleMail();
// });



 Route::group(['middleware'=>'web'],function(){

    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::view('contact','contact');
    Route::view('about','about');
    
    Route::get('logout', function () {
    session()->pull('LoggedUser');
        return redirect('/login');
    });
    Route::post('log',[BookLoginController::class,'login']);
Route::view('login','login');


Route::post('reg',[BookRegController::class,'register']);
Route::view('register','register');


});

Route::get('profile',[BookLoginController::class,'profile']);


// Route::view('profile','profile');