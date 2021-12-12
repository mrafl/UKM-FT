<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
    <meta content="Creative Tim" name="author">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ template('assets/img/unj.png') }}" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ argon("assets/vendor/nucleo/css/nucleo.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ argon("assets/vendor/@fortawesome/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">
    <!-- Argon CSS -->
    <link href="{{ argon("assets/css/argon.css?v=1.1.0") }}" rel="stylesheet" type="text/css">
</head>

<body class="bg-default">
<!-- Navbar -->
<nav class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light" id="navbar-main">
    <div class="container">
        <div class="navbar-brand">
            <img src="{{ template('assets/img/unj.png') }}">
        </div>
        <button aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-target="#navbar-collapse" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Welcome!</h1>
                        <p class="text-lead text-white">Use these awesome forms to login or create new account in your
                            project for free.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" xmlns="http://www.w3.org/2000/svg"
                 y="0">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" action="{{ route("login.action") }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Email" type="email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password" name="password">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary my-4" type="submit">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a class="text-light" href="#"><small>Forgot password?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a class="text-light" href="#"><small>Create new account</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="py-5" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2019 <a class="font-weight-bold ml-1" href="https://www.creative-tim.com" target="_blank">Creative
                        Tim</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">About
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://blog.creative-tim.com" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">License</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ argon("assets/vendor/jquery/dist/jquery.min.js") }}"></script>
<script src="{{ argon("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ argon("assets/vendor/js-cookie/js.cookie.js") }}"></script>
<script src="{{ argon("assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js") }}"></script>
<script src="{{ argon("assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js") }}"></script>
<!-- Argon JS -->
<script src="{{ argon("assets/js/argon.js?v=1.1.0") }}"></script>
<!-- Demo JS - remove this in your project -->
<script src="{{ argon("assets/js/demo.min.js") }}"></script>
</body>

</html>
