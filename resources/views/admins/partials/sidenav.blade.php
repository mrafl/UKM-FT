<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ template('assets/img/unj.png') }}">
                <img alt="..." class="navbar-brand-img" src="{{ template('assets/img/unj.png') }}">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $tab == TAB_ADMIN ? "active" : "" }}" href="{{ $tab == TAB_ADMIN ? "#" : route("admin.users") }}">
                            <i class="ni ni-single-02 text-red"></i>
                            <span class="nav-link-text">Admins</span>
                        </a>
                    </li>

                    <li class="nav-item {{ $tab == TAB_UKM ? "active" : "" }}">
                        <a aria-controls="navbar-dashboards" aria-expanded="false" class="nav-link" data-toggle="collapse" href="#navbar-dashboards" role="button">
                            <i class="ni ni-spaceship text-primary"></i>
                            <span class="nav-link-text">Ukm</span>
                        </a>
                        <div class="collapse {{ $tab == TAB_UKM ? "show" : "" }}" id="navbar-dashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ $subTab == TAB_ORMAWA ? "active" : "" }}" href="{{ $subTab == TAB_ORMAWA ? "#" : route("admin.ukm", ["slug" => "ormawa"]) }}">Ormawa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $subTab == TAB_OPMAWA ? "active" : "" }}" href="{{ $subTab == TAB_OPMAWA ? "#" : route("admin.ukm", ["slug" => "opmawa"]) }}">Opmawa</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
