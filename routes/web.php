<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ModalController;
use Illuminate\Support\Facades\Auth;
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
Route::post('/user/login','AuthController@Login')->name('user.login');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard','AuthController@dashboard')->name('dashboard');
    Route::resource('/infos','InfoController');
    Route::resource('/portfolios','PortfolioController');
    Route::resource('/skills','SkillController');
    Route::resource('/contacts','ContactController');

    


});




