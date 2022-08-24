@extends('layout')

@section('title', 'Events')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/events.css') }}" type="text/css">
@endsection

@section('content')

    <h1>Events</h1>

    <form action="events" method="POST">
        @csrf
        <div class="events-list">


        @foreach($eventData as $event)

                <div class="event columns content-block">
                    <div class="col1">
                        <input type="checkbox" name="events[]" value="{{$event->id}}" {{$event->isUserSubscribed() ? 'checked':''}} ">
                    </div>

                    <div class="col2">
                        <div class="poster">
                            <img src={{$event->picture}} alt="" class="">
                        </div>

                    </div>

                    <div class="col3">
                        <h2>{{$event->artist_name}}</h2>
                        <h3>{{$event->festival->name}}</h3>

                        <p>{{$event -> description}}</p>

                        <p>
                            <strong>Start time: </strong> <span>{{$event->start_time}}</span> <br>
                            <strong>End time:</strong> <span>{{$event->end_time}}</span>
                        </p>

                        <p>
                            <strong>Location: </strong>
                            <span>{{$event->latitude}}/{{$event->longitude}}</span>
                        </p>

                    </div>
                </div>

            @endforeach


        </div>

        <div class="align-center ">
            <button type="submit">Let's Have FUUUN!</button>
        </div>

    </form>

@endsection

