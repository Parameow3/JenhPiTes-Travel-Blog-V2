<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default Keywords')">

    <meta name="author" content="JenhPiTes">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('assets/js/scripts.js') }}" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>

    <!-- Bootstrap core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Owl Carousel -->
    <script src=" {{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- Font Awesome js -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"></script>

    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- MDB js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <!-- Owl Carousel js -->
    <link href= " {{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <script>

        $(document).ready(function(){
            // $(".owl-carousel").owlCarousel({
            //     margin:10,
            //     loop:true,
            //     nav:true,
            //     dots:false,
            // });

            var owl = $('.owl-carousel');
            owl.owlCarousel({
                nav:true,
                margin:10,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    960:{
                        items:5
                    },
                    1200:{
                        items:6
                    }
                }
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY>0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
        });

    </script>
    @yield('scripts')

</head>
<body>
<div id="app">

    @include('layouts.inc.frontend-navbar')

    <main class="py-5">
        @yield('content')
    </main>

    @include('layouts.inc.frontend-footer')

</div>

</body>
</html>
