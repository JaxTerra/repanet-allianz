<!doctype html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body data-smooth-scroll-offset="77">
<div class="main-container ">
    @include('layouts.partials.nav')

    @yield('content')

    @include('layouts.partials.footer')
</div>
@include('layouts.partials.scripts')
</body>
</html>
