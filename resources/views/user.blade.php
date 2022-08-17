@include('header');

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/user.css" type="text/css">
    <title>Users</title>
</head>

<body>
<div class="profile_title">Your profile data:</div>

<div class="profile_picture">
{{--    <img src="" alt="no picture yet">--}}
</div>

<table>
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
        <td>Subscribtion</td>
        <td>{{$user->newsletter}}</td>
    </tr>

</table>
<div class="profile_calendar">Your Calendar: </div>
{{--        Be lehet tenni a Calendarba--}}
@foreach ($events as $event)
    {{ $event->name }} <br>
@endforeach
</body>
</html>
@include('footer')
