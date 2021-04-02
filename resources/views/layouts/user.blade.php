<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials._head')

    <body>

        @include('partials.user._header')

        @yield('content')

        @include('partials.user._scripts')
    
        @livewireScripts
        
    </body>
    
</html>
