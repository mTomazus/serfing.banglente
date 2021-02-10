<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials._head')

    <body>

        @include('partials._header')

        @include('partials._footer')

        @include('partials._scripts')
        
    </body>
</html>
