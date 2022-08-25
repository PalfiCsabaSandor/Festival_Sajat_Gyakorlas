<!DOCTYPE html>
<html>
    <head>
        <title>{{ $details['title'] }}</title>
    </head>
    <body>{{ $details['body'] }}

    <h1>Title of concert: {{$details['event_name']}}</h1>
    <h4> Festival: {{$details['fest_id']}} <br>
         Artist: {{$details['artist']}}</h4>

    <p>
        <strong>Start time: </strong> <span>{{$details['start_time']}}</span> <br>
    </p>

    <p>
        <strong>Location: </strong>
        <span>Latitude/Longitude: {{$details['latitude']}}/{{$details['longitude']}}</span>
    </p>




    </body>
</html>
