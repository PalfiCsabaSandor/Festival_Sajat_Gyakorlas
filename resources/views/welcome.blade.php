@extends('layout')
@section('title', 'home')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" type="text/css">
@endsection

@section('content')
    <h6>Summer Planner</h6>
    <div id = 'header_image'>
        <img src="{{url('/images/HeaderPic.jpg')}}" class="stretch" alt="Image">
    </div>
    <div class="promo-text">
        <h4>This is Your Summer Planner, where You can make Your very own calendar, for the summer.
            We help You to have the best time of Your life.</h4>

        <h5>Super Simple to Use!</h5>
        All You need to do, is check Your favourites from our list of festivals and we will notify You before they start
    </div>
@endsection

