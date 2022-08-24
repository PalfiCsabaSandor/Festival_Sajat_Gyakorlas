@extends('layout')

@section('title', 'Events')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" type="text/css">
@endsection

@section('content')
    <div class="profile_title">Your profile data:</div>

    <table class="userinfo">
        <tr>
            <td>name</td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>{{$user->email}}</td>
        </tr>

        <tr>
            <td>age</td>
            <td>{{$user->age}}</td>
        </tr>
        <tr>
            <td>Subscription</td>
            <td>{{$user->newsletter}}</td>
        </tr>

    </table>
    <div class="profile_calendar">Your Calendar: </div>
    {{--        Be lehet tenni a Calendarba--}}
    {{--Csak a get logged user databol vannak adataim?--}}

    @foreach ($events as $event)
        <div class="event columns content-block">

            <div class="col1">
                <div class="poster">
                    <img src={{$event->picture}} alt="" class="">
                </div>
            </div>

            <div class="col3">
                <h2>{{$event->name}}</h2>

                <p>{{$event->artist}}</p>

                <p>{{$event->artist_name}}</p>

                <p>
                    <strong>Good to Know:</strong> {{$event->description}}
                </p>

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
@endsection
