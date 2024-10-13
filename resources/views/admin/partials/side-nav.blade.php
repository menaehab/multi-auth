<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Pages</div>
                <a class="nav-link" href="{{ route('admin') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-house-user"></i></div>
                    Home
                </a>
                <a class="nav-link" href="{{ route('admins.show') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-gear"></i></div>
                    admins
                </a>
                <a class="nav-link" href="{{ route('users.show') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Users
                </a>
                <a class="nav-link" href="{{ route('roles.show') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-tag"></i></div>
                    Roles
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
