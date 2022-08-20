@extends('layout')

@section('title', 'Details')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/events.css') }}" type="text/css">
@endsection
@section('content')

<h1>{{$festival->name}}</h1>
<p>{{$festival->description}}</p>
@foreach($events as $concert)

        <div class="event columns">


            <div class="col2">
                <img src="https://picsum.photos/150/200" alt="" class="poster">
            </div>

            <div class="col3">
                <h2>{{$concert->artist_name}}</h2>
                <h3>A FESZTIVAL NEV JON IDE</h3>

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
