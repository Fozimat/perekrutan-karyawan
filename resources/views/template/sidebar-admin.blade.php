<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin-dashboard') }}">
                <i class="mdi mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">Data Master</li>

        <li class="nav-item  {{ request()->is('admin/pelamar/datadiri*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pelamar-datadiri') }}">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Data Pelamar</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('admin/lowongan*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('lowongan.index') }}">
                <i class="menu-icon mdi mdi-account-search"></i>
                <span class="menu-title">Data Lowongan</span>
            </a>
        </li>

        <li class="nav-item nav-category">Hasil</li>

        <li class="nav-item  {{ request()->is('admin/hasil*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('hasil.index') }}">
                <i class="menu-icon mdi mdi-trophy-variant"></i>
                <span class="menu-title">Hasil</span>
            </a>
        </li>

    </ul>
</nav>