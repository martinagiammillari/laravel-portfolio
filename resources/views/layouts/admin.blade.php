<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Portfolio</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ route('admin.dashboard') }}">Portfolio Admin</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav w-100 d-flex flex-row justify-content-end gap-3 px-3">
                <div class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}">Torna al Sito</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse shadow-sm min-vh-100">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary text-white rounded' : '' }}" href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-tachometer-alt"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-diagram-project"></i> Progetti
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" href="{{ route('admin.profile.edit') }}">
                                    <i class="fa-solid fa-user"></i> Profilo
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Content -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>