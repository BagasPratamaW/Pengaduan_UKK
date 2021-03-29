<!doctype html>
<html class="no-js" lang="en">

<head>
    @yield('css2')
    
    @yield('css')
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
    
        <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('images/icon.svg') }}" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('exten/css/animate.css') }}">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('exten/css/magnific-popup.css') }}">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('exten/css/slick.css') }}">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('exten/css/LineIcons.css') }}">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ asset('exten/css/font-awesome.min.css') }}">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('exten/css/bootstrap.min.css') }}">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('exten/css/default.css') }}">
    


    

    <title>@yield('title')</title>
</head>

<body>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    @yield('js')

    <script src="{{ asset('exten/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('exten/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('exten/js/popper.min.js') }}"></script>
    <script src="{{ asset('exten/js/bootstrap.min.js') }}"></script>
    
    <!--====== Plugins js ======-->
    <script src="{{ asset('exten/js/plugins.js') }}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{ asset('exten/js/slick.min.js') }}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('exten/js/ajax-contact.js') }}"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{ asset('exten/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('exten/js/jquery.counterup.min.js') }}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('exten/js/jquery.magnific-popup.min.js') }}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('exten/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('exten/js/scrolling-nav.js') }}"></script>
    
    <!--====== wow js ======-->
    <script src="{{ asset('exten/js/wow.min.js') }}"></script>
    
    <!--====== Particles js ======-->
    <script src="{{ asset('exten/js/particles.min.js') }}"></script>
    
    <!--====== Main js ======-->
                                   
    
</body>

</html>
