<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets-admin/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    @stack('style')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="#">
                        <img src="{{ asset('assets-admin/images/logo.svg') }}" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="#">
                        <img src="{{ asset('assets-admin/images/logo-mini.svg') }}" alt="logo" />
                    </a>
                </div>
            </div>

            @php
            $greetings = "";
            $time = date("H");
            $timezone = date("e");

            if ($time < "12" ) { $greetings="Good morning" ; } else if ($time>= "12" && $time < "17" ) {
                    $greetings="Good afternoon" ; } else if ($time>= "17" && $time < "19" ) { $greetings="Good evening"
                        ; } else if ($time>= "19")
                        {
                        $greetings = "Good night";
                        }
                        @endphp

                        <div class="navbar-menu-wrapper d-flex align-items-top">
                            <ul class="navbar-nav">
                                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                                    <h1 class="welcome-text">{{ $greetings }}, <span class="text-black fw-bold">{{
                                            Auth()->user()->nama }}</span></h1>
                                </li>
                            </ul>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img class="img-xs rounded-circle"
                                            src="{{ asset('assets-admin/images/faces/avatar.png') }}"
                                            alt="Profile image">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                        aria-labelledby="UserDropdown">
                                        <div class="dropdown-header text-center">
                                            <img class="img-md rounded-circle"
                                                src="{{ asset('assets-admin/images/faces/avatar.png') }}" width="40"
                                                height="40" alt="Profile image">
                                            <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->nama }}</p>
                                            <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
                                        </div>


                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item"><i
                                                class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                                type="button" data-bs-toggle="offcanvas">
                                <span class="mdi mdi-menu"></span>
                            </button>
                        </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->

            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            @if (Auth::user()->level == 'ADMIN')
            @include('template.sidebar-admin')
            @else
            @include('template.sidebar-pelamar')
            @endif
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">

                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © e-Rekrutmen
                            {{
                            date('Y') }}. All
                            rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets-admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets-admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets-admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets-admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets-admin/js/template.js') }}"></script>
    <script src="{{ asset('assets-admin/js/settings.js') }}"></script>
    <script src="{{ asset('assets-admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <script src="{{ asset('assets-admin/js/file-upload.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    @stack('script')
</body>

</html>