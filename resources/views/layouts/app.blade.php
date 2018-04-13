<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="full-height">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('mdb/css/font-awesome.min.css')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdb/css/landing-page.mdb.min.css')}}" rel="stylesheet">

    <style>
        body {
            font-weight: 400;
        }
    </style>

</head>
<body class="creative-lp">

    <header>
        @include('membres.navbar')
        @if(url()->current()==route('home'))
            @include('membres.banner')
        @endif
    </header>
                   

    <main>
        @yield('content')
    </main>

    
    <footer class="page-footer text-center text-md-left unique-color-dark pt-0">
        @include('membres.footer')
    </footer>


    <script type="text/javascript" src="{{asset('mdb/js/jquery-3.2.1.min.js')}}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>

    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();
    </script>

    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("{{asset('mdb/mdb-addons/mdb-lightbox-ui.html')}}");
        });
    </script>
    
    <script>
        $(function () {
            if (window.scrollY>100) {
                $('nav').css({
                    background: '-webkit-linear-gradient(50deg,#FF5858,#ee4392), linear-gradient(40deg,#FF5858,#ee4392),-o-linear-gradient(50deg,#FF5858,#ee4392)',
                });
            } else {
                $('nav').css({
                    background: '',
                });
            }

        })
    </script>
</body>
</html>
