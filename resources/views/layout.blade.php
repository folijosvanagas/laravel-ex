<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BesideMe') }}</title>

    <!---- Fonts -- -->


    <!-- Styles -->
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/vid-parallax.css') }}">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/scrolling.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.sweet-modal.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}"/>


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">





    <!-- jQuery -->
    <script src={{ asset('js/jquery.js') }}></script>
    {{--<script src={{ asset('js/parallax.min.js') }}></script>--}}
    <script src={{ asset('js/vid-parallax.js') }}></script>
    <!-- Bootstrap Core JavaScript -->
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ asset('js/jquery.sweet-modal.min.js') }}></script>

    @yield('content')

    <script src={{ asset('js/script.js') }}></script>
    <script src={{ asset('js/animation.js') }}></script>
    <script src={{ asset('js/jquery.easing.min.js') }}></script>
    <script src={{ asset('js/scrolling-nav.js') }}></script>
    <script src={{ asset('js/modal.js') }}></script>




</body>

</html>
