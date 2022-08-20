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

Route::get('/', function () { //Ezzel a modszerrel minden phpt a blade-ben kell imlementalni
    return view('welcome');
});

Route::get('/festivals', [\App\Http\Controllers\FestivalController::class, 'getAllFestivalData']);

Route::get('/profile', [\App\Http\Controllers\UserController::class,'getLoggedUserData']
) ->middleware('auth'); //Ezzel a modszerrel a Controllerben kell implementalni

Route::get('/events', [\App\Http\Controllers\EventController::class, 'getAllEventData']);
Route::post('/events', [\App\Http\Controllers\EventController::class, 'updateUserEvents']);

Route::get('/festivals/{festival}',  [\App\Http\Controllers\FestivalController::class, 'details']);


Route::post("/logout",[LogoutController::class,"store"])->name("logout");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/users', function (){
//   return view('users');
//})->middleware(['auth'])->true;