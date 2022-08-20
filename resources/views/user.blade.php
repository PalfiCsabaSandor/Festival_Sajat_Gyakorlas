@extends('layout')

@section('title', 'Events')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" type="text/css">
@endsection

@section('content')
<div class="profile_title">Your profile data:</div>

<div class="profile_picture">
{{--    <img src="" alt="no picture yet">--}}
</div>

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
        <td>image</td>
        <td>{{$user->image}}</td>
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
@foreach ($events as $event)
    {{ $event->name }} <br>
@endforeach
@endsection
