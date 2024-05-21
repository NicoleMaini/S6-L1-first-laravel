<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
            <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="16" alt="MDB Logo"
                loading="lazy" style="margin-top: -1px;" />
        </a>

        <!-- Toggle button -->
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= route('home') ?>">Laravel - First Project</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        menù
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= route('activities.index') ?>">Activities</a></li>
                        <li><a class="dropdown-item" href="<?= route('activities.add') ?>">Add Activities</a></li>
                    </ul>
                </li>
                @auth
                    <li>
                        <a data-mdb-ripple-init type="button" class="btn btn-link px-1 me-1 text-decoration-none"
                            href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li><a data-mdb-ripple-init type="button" class="btn btn-link px-1 me-2 text-decoration-none"
                            href="{{ route('profile.edit') }}">
                            Profile
                        </a></li>
                @endauth
            </ul>
            @auth
                <div class="nav-item ms-auto me-4">
                    <p class="nav-link mb-0">Benvenuto {{ Auth::user()->name }}</p>
                </div>
            @endauth
            <form class="d-flex input-group w-auto">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </span>
            </form>
            <!-- Left links -->
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary me-3" href="#">
                        Logout
                    </button>
                </form>
            @else
                <div class="d-flex align-items-center">
                    <a data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2 text-decoration-none"
                        href="{{ route('login') }}">
                        Login
                    </a>
                    <a data-mdb-ripple-init type="button" class="btn btn-primary me-3" href="{{ route('register') }}">
                        Sign up for free
                    </a>
                </div>
            @endauth
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
