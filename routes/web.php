<?php

use Illuminate\Support\Facades\Route;
use \Acaronlex\LaravelCalendar\Calendar;
use App\Http\Controllers\EventController;
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

//Route::get('/', function () {

//});
Auth::routes();

Route::get('/', [EventController::class, "index"]);
Route::get('/event/{id}', [EventController::class, "event"]);
Route::any('event-form', [EventController::class, "store"]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
