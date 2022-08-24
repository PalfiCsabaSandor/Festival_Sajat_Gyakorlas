<link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">

    <div class="header">Summer Planner</div>

    <div class="linkbar">
        <a href = {{url('/')}}>HOME</a>

        @if (!Auth::user())
        <a href = {{url('login')}}>Login</a>
        <a href= "{{url('register')}}">Register</a>
        @endif

        <a href = {{url('festivals')}}>Festivals</a>
        @auth
            <a href={{url('events')}}>Events</a>
            <a href={{url('profile')}}>Profile</a>
        @endauth

        @auth
        <div class="logoutlink">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="linkbutton">Logout</button>
            </form>
        </div>
        @endauth

    </div>