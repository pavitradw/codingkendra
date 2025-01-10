<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('include.head')

<body>
    <div class="page-wrapper">
        @include('include.preloader')
        @include('include.header')

        <div id="app">
            @yield('content')
        </div>




        @include('include.footer')
    </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    @include('include.footer_links')
</body>

</html>