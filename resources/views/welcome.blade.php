<!doctype html>
<html lang="en">
<head>
{{--    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>--}}
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
</body>
</html>
