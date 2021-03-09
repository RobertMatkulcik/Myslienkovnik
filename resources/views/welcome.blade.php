<!doctype html>
<html lang="en">
<head>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>
    <script src="{{ asset("js/app.js") }}"></script>
    <link href='{{ asset("css/app.css") }}' rel='stylesheet' />

{{--    <link href='{{ asset("css/bootstrap.min.css") }}' rel='stylesheet' />--}}
{{--    <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>--}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>
</head>
<body>
{!! $calendar->calendar() !!}
{!! $calendar->script() !!}

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 id="event-title"></h4>

                Start time:
                <br />
                <input type="text" class="form-control" name="start_time" id="start_time">

                End time:
                <br />
                <input type="text" class="form-control" name="finish_time" id="finish_time">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-primary" id="appointment_update" value="Save">
            </div>
        </div>
    </div>
</div>
</body>


</html>
