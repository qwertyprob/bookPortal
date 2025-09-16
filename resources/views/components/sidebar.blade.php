<div class="sidebar d-flex flex-column" style="height: 100vh;">
    <div class="logo-container d-flex align-items-center px-3 position-relative">
        <img class="img-fluid" src="{{asset("img/logo.png")}}" style="width: 3em">
        <a href="/" style="text-decoration: none">
            <strong class="ps-2 fs-2 logo-string" style="color: var(--pink-color)">BookPortal</strong>
        </a>
        <a href="/" class="stretched-link"></a>

    </div>

    <!-- основное меню -->
    <nav class="nav flex-column mt-3 flex-grow-1">
        <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="/admin/dashboard">
            <span class="icon"><i class="bi bi-grid"></i></span>
            <span class="description">Dashboard</span>
        </a>

        <a class="nav-link {{ request()->is('admin/books*') ? 'active' : '' }}" href="/admin/books">
            <span class="icon"><i class="bi bi-book"></i></span>
            <span class="description">Books</span>
        </a>

        <a class="nav-link {{ request()->is('admin/authors*') ? 'active' : '' }}" href="/admin/authors">
            <span class="icon"><i class="bi bi-pen"></i></span>
            <span class="description">Authors</span>
        </a>



        {{-- menu with dropdown --}}
        <a class="nav-link" href="#" data-bs-toggle="collapse"
           data-bs-target="#submenu" aria-expanded="false"
           aria-controls="submenu">
            <span class="icon"><i class="bi bi-card-checklist"></i></span>
            <span class="description">
                Queries
                <i class="bi bi-caret-down-fill"></i>
            </span>
        </a>

        {{-- submenu --}}
        <div class="sub-menu collapse" id="submenu">
            <a class="nav-link ps-3" href="/admin/dashboard">
                <span class="icon"><i class="bi bi-journal"></i></span>
                <span class="description">Books</span>
            </a>
            <a class="nav-link ps-3" href="#">
                <span class="icon"><i class="bi bi-chat"></i></span>
                <span class="description">Comments</span>
            </a>
        </div>
        <a class="nav-link" href="/admin/dashboard">
            <span class="icon"><i class="bi bi-people"></i></span>
            <span class="description">Users</span>
        </a>

    </nav>

    <!-- блок настроек уехал вниз -->
    <div>
        <a class="nav-link" href="/admin/dashboard">
            <span class="icon"><i class="bi bi-gear"></i></span>
            <span class="description">Settings</span>
        </a>

        <a class="nav-link mb-4" href="/profile">
            <span class="icon"><i class="bi bi-person"></i></span>
            <span class="description">Arsenii Arleckino</span>
        </a>


    </div>
</div>
