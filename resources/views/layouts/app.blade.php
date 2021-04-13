<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials._head')

    <body>

        @include('partials._header')

        @yield('content')
  
        @livewireScripts

        @yield('scripts')
        
    </body>
    
</html>
