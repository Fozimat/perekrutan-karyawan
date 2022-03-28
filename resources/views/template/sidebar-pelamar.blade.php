<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ request()->is('pelamar') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pelamar-dashboard') }}">
                <i class="mdi mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Data Master</li>
        <li class="nav-item {{ request()->is('pelamar/datadiri*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('datadiri.index') }}">
                <i class="mdi mdi mdi-account menu-icon"></i>
                <span class="menu-title">Data Diri</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('pelamar/dokumen*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dokumen.index') }}">
                <i class="mdi mdi mdi-file-image menu-icon"></i>
                <span class="menu-title">Upload Dokumen</span>
            </a>
        </li>
    </ul>
</nav>