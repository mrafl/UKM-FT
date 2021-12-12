<!-- Topnav -->
<nav class="navbar navbar-top navbar-expand navbar-dark border-bottom" style="background: #9850C3;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center ml-md-auto">
                <li class="nav-item d-xl-none">
                    <!-- Sidenav toggler -->
                    <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                         data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </li>
                <li class="nav-item d-sm-none">
                    <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                        <i class="ni ni-zoom-split-in"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="{{ asset('assets/img/user.png') }}">
                                </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">{{ session('nama') }}</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header -->
