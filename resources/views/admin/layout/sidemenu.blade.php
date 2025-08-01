<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Admin Dashboard</span></li>
                <li class="nav-item">

                    <a href="{{ route('adminpanel') }}" class="nav-link menu-link"> <i class="ph-gauge"></i> <span
                            data-key="t-dashboards">Dashboard</span> </a>
                </li>
                {{-- <li class="nav-item">

                    <a href="{{route('permissions.index')}}" class="nav-link menu-link"> <i class="ph-gauge"></i>
                        <span data-key="t-herosection">Permissions</span> </a>
                        </li> --}}
                @can('view permissions')
                <li class="nav-item">

                        <a href="{{ route('permissions.index') }}" class="nav-link menu-link"> <i class="ph-lock-key"></i> <span
                                data-key="t-chat">Permisssions List</span> </a>
                    </li>
                @endcan
                
                    {{-- <li class="nav-item">
                        <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ph-gauge"></i> <span data-key="t-dashboards">

                                Permissions</span>
                        </a>
                    </li>
                @endcan
                <div class="collapse menu-dropdown" id="sidebarDashboards">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('permissions.index') }}" class="nav-link" data-key="t-analytics">
                                Permissions List </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('permission.create') }}" class="nav-link" data-key="t-analytics">
                                Permissions Create </a>
                        </li>


                    </ul>
                </div>
                </li> --}}
                @can('view roles')
                    <li class="nav-item">

                        <a href="{{ route('roles.index') }}" class="nav-link menu-link"> <i class="ph-chats"></i> <span
                                data-key="t-chat">Roles List</span> </a>
                    </li>
                @endcan
                @can('view articles')
                    <li class="nav-item">
                        <a href="{{ route('article.index') }}" class="nav-link menu-link"> <i class="ph-file-text"></i>
                            <span data-key="t-chat">Articles</span> </a>
                    </li>
                @endcan
                @can('view users')
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link menu-link"><i class="ph-user"></i>
                            <span data-key="t-chat">Users</span> </a>
                    </li>
                @endcan
                <li class="nav-item">
                    {{-- <a href="{{ route('logout') }}" class="nav-link menu-link"> <i class="ph-sign-out"></i>
                        <span data-key="t-chat">Logout</span> </a> --}}
                        <a class="nav-link menu-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i>
                            <span class="align-middle" data-key="t-logout">Logout</span>
                        </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
