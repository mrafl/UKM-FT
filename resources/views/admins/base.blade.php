<?php if (!isset($subTab)) $subTab = ""; ?>
<!DOCTYPE html>
<html>

@include("admins.partials.head")

<body>
<!-- Sidenav -->
@include("admins.partials.sidenav")
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    @include("admins.partials.topnav")
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                @yield("header")
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        @yield("content")
        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center text-lg-left text-muted">
                        &copy; 2019 <a class="font-weight-bold ml-1" href="#"><b>B'Dels</b> Team</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#" ><b>B'Dels</b> Team</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Argon Scripts -->
@include("admins.partials.script")
@yield("script")
</body>

</html>
