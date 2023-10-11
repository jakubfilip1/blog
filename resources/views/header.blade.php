<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Strona Główna</a>
                </li>
                @if(session('admin_login'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('addArticle') ? 'active' : '' }}" href="{{ route('addArticle') }}">Add Article</a>
                    </li>
                @endif
                <li class="nav-item">
                    @if(session('admin_login'))
                        <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('logout') }}">Logout</a>
                    @else
                        <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
