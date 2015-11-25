<!DOCTYPE html>
<html>
@include('partials.head')
<body>
@include('partials.nav')
<div class="container-header">
    <div class="container">

    </div>
</div>
<div class="container-main">
    @yield('container-main')
</div>

<!-- LOAD FOOTER -->
@include('partials.footer')
</body>
</html>