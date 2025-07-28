<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::get('/home' , [HomeController::class , 'index'])->name('home');


Route::get('/' , [WelcomeController::class , 'index']);
Route::get('/ourteam' , [WelcomeController::class , 'ourTeam']);

Route::get('aboutus' , function(){
    return view('pages.aboutus');
});

// القسم الخاص بالكباتن والداش بورد بتاعتهم
Route::resource('captains' ,CaptainController::class)->except('show')->middleware('IsAdmin');


//القسم الخاص براي العميل والداش بورد بتاعته 
// لسا هضيف هنا الجزء بتاع الصلاحيات بس مش دلوقتي 
Route::resource('contacts' ,ContactController::class);
// دا علشان يبعت البيانات من الصفحه العامه للجميع
Route::post('/contact' , [ContactController::class, 'store'])->name('contacts.store');