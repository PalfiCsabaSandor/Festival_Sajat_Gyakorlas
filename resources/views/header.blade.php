<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
<body>
    <div class="header">Summer Planner</div>


    <div class="linkbar">
        <a href = {{url('/')}}>HOME</a>
        @if (!Auth::user())
        <a href = {{url('login')}}>Login</a>
        <a href= "{{url('register')}}">Register</a>
        @endif
        <a href = {{url('festivals')}}>Festivals</a>
        @auth
            <a href = {{url('profile')}}>Profile</a>
        @endauth


    </div>

</body>
