<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
<body>
    <div class="header">Summer Planner</div>


    <div class="linkbar">
        <a href = {{url('/')}}>HOME</a>
        <a href = {{url('login')}}>Login</a>
        <a href= "{{url('register')}}">Register</a>
        <a href = {{url('festivals')}}>Festivals</a>



    </div>
    <div id = 'header_image'>
        <img src="{{url('/images/HeaderPic.jpg')}}" class="stretch" alt="Image">
    </div>
</body>
