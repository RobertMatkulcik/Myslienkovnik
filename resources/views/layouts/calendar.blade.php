<html lang="sk">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>
    <script src="{{ asset("js/app.js") }}"></script>
    <link href='{{ asset("css/app.css") }}' rel='stylesheet'/>

    {{--    <link href='{{ asset("css/bootstrap.min.css") }}' rel='stylesheet' />--}}
    {{--    <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>--}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>
</head>
<body>
<div class="row">
    <div class="col-6">
        <h1>Myšlienkovník</h1>
    </div>
    <div class="col-6">
        <button class="AddNewButton btn-primary btn mt-3">Pridať myšlienku</button>
    </div>
</div>
@yield("content")
@include('modals')
</body>

</html>
