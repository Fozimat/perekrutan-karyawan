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
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="mdi mdi mdi-trophy-variant menu-icon"></i>
                <span class="menu-title">Hasil</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Hasil Seleksi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Laporan</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>