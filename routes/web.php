<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptainController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [WelcomeController::class , 'index']);
Route::get('/ourteam' , [WelcomeController::class , 'ourTeam']);

Route::get('aboutus' , function(){
    return view('pages.aboutus');
});


Route::resource('captains' ,CaptainController::class)->except('show');
