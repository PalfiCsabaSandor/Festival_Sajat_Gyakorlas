<!doctype html>
<html lang="en">

@include('partials.head')

<body>
    <header>
        @include('header')
    </header>

    <section>
        <div class="main-container">
            @yield('content')
        </div>
    </section>

    <footer>@include('footer')</footer>
</body>
</html>
