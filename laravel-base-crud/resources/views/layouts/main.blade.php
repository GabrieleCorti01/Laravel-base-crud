<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('cdn-section')
</head>
<body>
    
    <!-- header -->
    @include('partials.header')

    <!-- main -->
    <main class="container">
        <section id="@yield('main-section-id')" class="@yield('main-section-classes')">
            <div class="main-card">
                @yield('main-content')
            </div>
        </section>
    </main>

    @yield('script-section')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>