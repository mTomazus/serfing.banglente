<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials._head')

    <body>

        @include('partials.admin._header')

        @yield('content')

        @include('partials.admin._scripts')
    
        @livewireScripts
        
    </body>
    
</html>
