@extends('layout')

@section('title', 'Details')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/events.css') }}" type="text/css">
@endsection
@section('content')

<h1>{{$festival->name}}</h1>
<p>{{$festival->description}}</p>
@foreach($events as $concert)

        <div class="event columns content-block">


            <div class="col1">
                <img src="{{$concert->picture}}" alt="" class="poster">
            </div>

            <div class="col2">
                <h2>{{$concert->artist_name}}</h2>


                <p>{{$concert -> description}}</p>

                <p>
                    <strong>Start time: </strong> <span>{{$concert->start_time}}</span> <br>
                    <strong>End time:</strong> <span>{{$concert->end_time}}</span>
                </p>

                <p>
                    <strong>Location: </strong>
                    <span>{{$concert->latitude}}/{{$concert->longitude}}</span>
                </p>

            </div>
        </div>


@endforeach
@endsection
