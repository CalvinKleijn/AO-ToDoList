<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('partials._head')

<body>

<div class="container">    
            
    @yield('content')

</div>

@include('partials._javascript')

</body>
</html>