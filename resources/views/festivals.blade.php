@extends('layout')

@section('title', 'Festivals')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/festivals.css') }}" type="text/css">
@endsection

@section('content')

    <h1>Festivals</h1>

    <p>You have {{ count($alldata) }} festivals in the list.</p>

    <form action="" method="post">

    <ul class="festivals-list">

    @foreach($alldata as $entry)
        <li>
            <div class="festival-block columns content-block">
                <div class="col1">
                    <div class="poster">
                        <img src={{$entry->picture}} alt="">
                    </div>
                </div>


                <div class="col2">
                    <h2><a href="/festivals/{{$entry->id}}">{{$entry->name}}</a></h2>
                    <div class="">
                        <span>{{$entry->description}}<br></span><br>
                        <span><strong> Date: {{$entry->start_date}} : {{$entry->end_date}} </strong></span>
                    </div>


                </div>
            </div>
        </li>

        @endforeach
        {{--  --}}



        {{--idaig for--}}

    </ul>
{{--        <div class="align-center ">--}}
{{--            <button type="submit">Let's Have FUUUN!</button>--}}
{{--        </div>--}}
    </form>

@endsection


