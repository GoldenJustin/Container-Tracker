<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::to('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-truck"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Container <sup>Track</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ URL::to('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    @auth
        @if (Auth::user()->hasRole('super-admin'))
            <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ URL::to('users') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span>
                </a>
            </li>
        @endif
    @endauth

    @role('super-admin|terminal')
        <li class="nav-item {{ Request::is('container/index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ URL::to('container/index') }}">
                <i class="fas fa-fw fa-box"></i>
                <span>Container</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('driver/index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ URL::to('driver/index') }}">
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Driver</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('icd/index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ URL::to('icd/index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>ICD</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('truck/index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ URL::to('truck/index') }}">
                <i class="fas fa-fw fa-car"></i>
                <span>Truck</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('allocate/index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ URL::to('allocate/index') }}">
                <i class="fas fa-fw fa-file"></i>
                <span>Container To ICD</span>
            </a>
        </li>
    @endrole

    @role('super-admin|icd')
        <li class="nav-item {{ Request::is('allocated/index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ URL::to('allocated/index') }}">
                <i class="fas fa-fw fa-folder-open"></i>
                <span>Allocated Containers</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('delivery/index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ URL::to('delivery/index') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Delivery Order</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-bell"></i>
                <span>Notify Customers</span>
            </a>
        </li>
    @endrole

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>

<!-- End of Sidebar -->
