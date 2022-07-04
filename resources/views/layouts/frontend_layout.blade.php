<!DOCTYPE html>
<html lang="en">

<head>

    @yield('head')

    @include('layouts.includes.head')



</head>

<body>

<div id="main_wrapper">

@include('layouts.includes.header')

@yield('content')

@include('layouts.includes.footer')

</div>
@yield('custom_js')
</body>


</html>
