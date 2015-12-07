<!DOCTYPE html>
<html>
    @include('partials.head')

    <body>
        <div id="app">
            <div class="padding-top-60"></div>
            @include('partials.nav')

            <div class="container-main">
                @yield('container-main')
            </div>
        </div>

        <!-- LOAD FOOTER -->
        @include('partials.footer')
    </body>
</html>