<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
<header>
    <h1>FestivalApp</h1>
</header>
<body>
    <div class="linkbar">
    <a href = 'authentication.blade.php'>Authentication</a>
    <a href = 'festivals.blade.php'>Festivals</a>

    </div>
    <div id = 'header_image'>
        <img src="{{url('/images/HeaderPic.jpg')}}" class="stretch" alt="Image">
    </div>
</body>
