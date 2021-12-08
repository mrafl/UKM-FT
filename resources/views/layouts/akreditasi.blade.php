<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>{{ $title }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ template('assets/img/unj.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ template('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ template('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ template('assets/css/argon.css?v=1.1.0') }}" type="text/css">

    <link rel="stylesheet" href="{{ template('style.css') }}" type="text/css">
</head>

<body>
    <!-- ======= Sidenav ======= -->
    @include('partials.sidebar')

    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- ======= Sidenav ======= -->
        @include('partials.topNav')

        <!-- ======= Page Title ======= -->
        @yield('pageTitle')

        <!-- Page content -->
        <div class="container-fluid mt--6">

            @yield('container')

            <!-- ======= Footer ======= -->
            @include('partials.footer')
            @include('partials.js')
        </div>
    </div>

</body>

</html>
