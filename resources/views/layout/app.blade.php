<html lang="{{str_replace('_','-', app()->getLocale()) }}">
    @include('layout.head')
    <body>
        @include('layout.header')
        <main>
            @yield('content')
            
        </main>
        @include('layout.footer')
    </body>
</html>
