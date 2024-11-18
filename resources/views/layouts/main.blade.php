<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">

<head>
    @include('layouts.header')
</head>

<body id="top">
    @include('layouts.navbar')
    <div class="page-content">
        <div id="content">
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i
                    class="fas fa-angle-up fa-x"></i></span></a></div>
    @include('layouts.script')
</body>

</html>
