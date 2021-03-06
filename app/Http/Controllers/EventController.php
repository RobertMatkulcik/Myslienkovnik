<?php

namespace App\Http\Controllers;

use App\Models\Event;
use \Acaronlex\LaravelCalendar\Calendar;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {

        $eventsArray = [];

        $events = Event::get();


        foreach ($events as $event) {
            $eventsArray[] = Calendar::event(
                $event->title, //event title
                true, //full day event?
                new \DateTime($event->start),
                new \DateTime($event->start),
                $event->id, //optionally, you can specify an event ID
                [
//                    "backgroundColor" => "red",
                    "description" => "kokoti",
                ],
            );
        }


        $calendar = new Calendar();
        $calendar->addEvents($eventsArray)
            ->setOptions([
                'locale' => 'sk',
                'firstDay' => 0,
                'displayEventTime' => false,
                'selectable' => true,
                'initialView' => 'dayGridMonth',
                'headerToolbar' => [
                    'end' => 'today,prev,next'
                ],
                "height" => "100vh",
                "themeSystem" => 'bootstrap',
                "theme" => 'darkly'
            ]);
        $calendar->setId('1');
        $calendar->setCallbacks([

            'select' => 'function(selectionInfo){}',
            'eventClick' =>
                "
                function(calEvent, jsEvent, view) {
                     $.ajax({
                        url : '/event/'+calEvent.event.id,
                        type: 'GET',
                        success: function(response){
                            $('#event-title').text(moment(calEvent.event.start).format('DD.MM')+' '+calEvent.event.title);
                            $('#event-description').text(response.event[0].description);
//                            $('#start_time').val(moment(calEvent.start).format('YYYY-MM-DD HH:mm:ss'));
//                            $('#finish_time').val(moment(calEvent.end).format('YYYY-MM-DD HH:mm:ss'));
                            $('#viewModal').modal();
                            console.log(response)
                        },
                        error: function(err){
                            console.log(err)
                        }
                    })

                }
                ",

        ]);

//        'function(event){
//                  console.log(event);
//                }'

        return view('welcome', compact('calendar'));

//        return response()->json(["events" => $events]);
    }

    public function event(Request $request, $eventId){
        $event = Event::where("id", $eventId)->get();
        return compact('event');
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'title'         => 'required',
            'start'         => 'required|date',
            'description'   => 'required',
        ]);

        Event::create([
            'title'       => $request->title,
            'start'       => $request->start,
            'end'         => $request->start,
            'description' => $request->description,
            'user_id' => \Auth::user()->id ?? 0,
        ]);

        return response()->json([ 'success'=> 'Form is successfully submitted!']);

    }

}
