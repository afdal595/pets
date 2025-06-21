<header class="bg-primary text-white py-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="m-0">
                <a href="/" class="text-white text-decoration-none">
                    <i class="fas fa-paw me-2"></i>PET GUILD
                </a>
            </h1>
            <div class="search-box">
                <form action="{{ route('search') }}" method="GET">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Cari hewan..." required>
        <button class="btn btn-light" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>
            </div>
            @auth
                @if(Auth::user())
                    <div class="user-menu">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="user-menu">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle me-1"></i> Guest
                            </button>
                        </div>
                    </div>
                @endif
            @else
                <div>
                    <a href="{{ route('login') }}" class="btn btn-light me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light">Daftar</a>
                </div>
            @endauth
        </div>
    </div>
</header>