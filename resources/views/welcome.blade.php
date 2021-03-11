@extends('layouts.calendar')

@section('content')
{!! $calendar->calendar() !!}
{!! $calendar->script() !!}
@endsection


