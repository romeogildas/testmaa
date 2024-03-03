<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    	<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!--favicon-->
        <link rel="icon" href="{!!asset('/img/home.png')!!}" type="image/x-icon">

        <!-- Titre -->
        <title>@yield('title')</title>

        <!--plugins-->
        <link href="{!!asset('/css/bootstrap.min.css')!!}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <link href="{!!asset('/css/font-awesome.min.css')!!}" rel="stylesheet">
        <link href="{!!asset('/custom-slider/css/nivo-slider.css')!!}" rel="stylesheet">
        <link href="{!!asset('/custom-slider/css/preview.css')!!}" rel="stylesheet">
        <link href="{!!asset('/css/owl.carousel.css')!!}" rel="stylesheet">
        <link href="{!!asset('/css/owl.theme.css')!!}" rel="stylesheet">
        <link href="{!!asset('/css/owl.transitions.css')!!}" rel="stylesheet">
        <link href="{!!asset('/css/jquery-ui.css')!!}" rel="stylesheet">
        <link href="{!!asset('/css/meanmenu.min.css')!!}" rel="stylesheet">
        <link href="{!!asset('/css/animate.css')!!}" rel="stylesheet">
        <link href="{!!asset('/css/normalize.css')!!}" rel="stylesheet">
        <link href="{!!asset('/css/main.css')!!}" rel="stylesheet">
        <link href="{!!asset('/custom-slider/css/nivo-slider.css')!!}" rel="stylesheet">
        <link href="{!!asset('/custom-slider/css/preview.css')!!}" rel="stylesheet">
        <link href="{!!asset('/style.css')!!}" rel="stylesheet">
        <link href="{!!asset('/css/responsive.css')!!}" rel="stylesheet">


        <script src="{!!asset('/js/vendor/modernizr-2.8.3.min.js')!!}"></script>


        @yield('styles')
    
    </head>
    <body class="Home-four">
        <div>

            <!--====== Start Header ======-->
            @include('layouts.header')
            <!--====== End Header ======-->

            @yield('content')

            <!-- <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a> -->

            <!--====== Start footer ======-->
            @include('layouts.footer')
            <!--====== End footer ======-->

            <!-- Preloader Start Here -->
            <div id="preloader"></div>
            <!-- Preloader End Here -->
        
        </div>
  
        <!-- JS -->
        <script src="{!!asset('/js/vendor/jquery-1.11.3.min.js')!!}"></script>
        <script src="{!!asset('/js/bootstrap.min.js')!!}"></script>
        <script src="{!!asset('/js/wow.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery-price-slider.js')!!}"></script>
        <script src="{!!asset('/js/jquery.meanmenu.js')!!}"></script>
        <script src="{!!asset('/js/owl.carousel.min.js')!!}"></script>
        <script src="{!!asset('/js/jquery.scrollUp.min.js')!!}"></script>
        <script src="{!!asset('/js/plugins.js')!!}"></script>
        <script src="{!!asset('/custom-slider/js/jquery.nivo.slider.js')!!}"></script>
        <script src="{!!asset('/custom-slider/home.js')!!}"></script>
        <script src="{!!asset('/js/main.js')!!}"></script>

        @yield('scripts')

    </body>


</html>