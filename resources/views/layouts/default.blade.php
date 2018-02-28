<!DOCTYPE html>
<html lang="en">

@include('Includes.head')

<body>

<div class='container'>

    <header>
        @include('Includes.menu')
    </header class='container'>
    <main role="main">
        @yield('content')

    @include('Includes.jsfooter')
    <footer>
    @include('Includes.footer')
    </footer>

</div>
</body>
</html>