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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/festivals', function () {
    return view('festivals');
});

Route::get('/profile', function(){
    return view('user');
}) ->middleware('auth');

//Route::get('/profile', [\App\Http\Controllers\UserController::class,'getOneUserData']
//) ->middleware('auth');

Route::get('/events', function(){
    return view('events');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/users', function (){
//   return view('users');
//})->middleware(['auth'])->true;