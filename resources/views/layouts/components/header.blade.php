<header>
    <div id="navigation" class="navigation navigation-landscape">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/images/logo.png" width="135" height="88"
                                alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-7 position-static">
                    <div class="nav-toggle"></div>
                    <nav class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            <li>
                                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="/">Home</a>
                            </li>
                            <li>
                                <a class="{{ request()->routeIs('partnership') ? 'active' : '' }}"
                                    href="/partnership">Partnership</a>
                            </li>
                            <li>
                                <a href="#">Register</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="/daftarmitra">Daftar mitra sanggar</a></li>
                                    <li><a href="/login">Daftar siswa sanggar</a></li>
                                </ul>
                            </li>
                            <li>
                                @guest
                                    <a href="{{ route('login') }}">Login</a>
                                @endguest
                                @auth
                                    <a href="#">{{ auth()->user()->name }}</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li><a href="{{ route('logout') }}">Logout</a>
                                            </li>
                                        </form>
                                    </ul>
                                @endauth
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 position-static">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
