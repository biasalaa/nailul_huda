<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Masjid Nailul Huda</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('template') }}/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/node_modules/weathericons/css/weather-icons.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/node_modules/weathericons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/node_modules/summernote/dist/summernote-bs4.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/components.css">

    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('component.navbar')
            <div class="main-sidebar">
                @include('component.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('header')


                    @yield('content')

                </section>
            </div>
            @include('component.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('template') }}/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
    <script src="{{ asset('template') }}/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('template') }}/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="{{ asset('template') }}/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{ asset('template') }}/node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="{{ asset('template') }}/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="{{ asset('template') }}/assets/js/scripts.js"></script>
    <script src="{{ asset('template') }}/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('template') }}/assets/js/page/index-0.js"></script>
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
