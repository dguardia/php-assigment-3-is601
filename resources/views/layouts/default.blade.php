<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
<body>
    <header>
        @include('includes.menu')
        @include('includes.header')
    </header>
    <main role="main">
        @yield('content')
    </main>
    @include('includes.footer')
    @include('includes.jsfooter')
</body>
</html>
