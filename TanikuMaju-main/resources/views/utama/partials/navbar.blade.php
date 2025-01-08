<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">

        <a class="navbar-brand ms-5" href="homepage.html">
            <img src="{{ asset('images/logo.png') }}" style="width: 100px;" alt="TanikuMaju" class="ms-3">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}" href="/beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('monitoring') ? 'active' : '' }}" href="/monitoring">Pantau Tani</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('artikel') || Request::is('artikel/detail/*') ? 'active' : '' }}" href="/artikel">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('chatai') ? 'active' : '' }}" href="/chatai">Chat AI</a>
                </li>
            </ul>


            <ul class="navbar-nav me-5 d-none d-md-block">
                <li class="nav-item">
                    <a href="index.html">
                        <img src="{{ asset('images/profile.png') }}" rounded-circle" alt="Profile" width="40" height="40">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>