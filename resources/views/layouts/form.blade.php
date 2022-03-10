<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials._head')

    <body>

        @yield('content')
  
        @livewireScripts

        @yield('scripts')
        
    </body>
    
</html>
