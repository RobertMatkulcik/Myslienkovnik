<?php

use Illuminate\Support\Facades\Route;
use \Acaronlex\LaravelCalendar\Calendar;
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
    $events = [];

    $events[] = Calendar::event(
        'Event One', //event title
        true, //full day event?
        '2015-02-11T0800', //start time (you can also use Carbon instead of DateTime)
        '2015-02-12T0800', //end time (you can also use Carbon instead of DateTime)
        0 //optionally, you can specify an event ID
    );

    $events[] = Calendar::event(
        "Valentine's Day", //event title
        true, //full day event?
        new \DateTime('2021-02-14'), //start time (you can also use Carbon instead of DateTime)
        new \DateTime('2021-02-14'), //end time (you can also use Carbon instead of DateTime)
        'stringEventId' //optionally, you can specify an event ID
    );

    $calendar = new Calendar();
    $calendar->addEvents($events)
        ->setOptions([
            'locale' => 'sk',
            'firstDay' => 0,
            'displayEventTime' => false,
            'selectable' => true,
            'initialView' => 'dayGridMonth',
            'headerToolbar' => [
                'end' => 'today prev,next'
            ],
            "height" => "100vh",
            "themeSystem" => 'bootstrap',
            "theme" => 'darkly'
        ]);
    $calendar->setId('1');
    $calendar->setCallbacks([
        'select' => 'function(selectionInfo){}',
        'eventClick' => 'function(event){}'
    ]);

    return view('welcome', compact('calendar'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
