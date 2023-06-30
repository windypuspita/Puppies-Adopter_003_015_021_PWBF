<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container my-3">
        <a class="navbar-brand" href="#">Puppies Adopter</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Adopt</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/">Help</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/">Contact</a>
                </li>
                {{-- profil --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{-- gambar --}}
                        <img src="https://images.unsplash.com/photo-1517849845537-4d257902454a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHVwcGllc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80"
                            alt=""
                            style="width: 30px; height: 30px; border-radius: 50%; object-fit: cover; object-position: center;">
                    </a>
                    @auth
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {{-- <li><a class="dropdown-item" href="{{ route('admin.home') }}">Dashboard</a></li> --}}
                            {{-- nama user --}}
                            <li><a class="dropdown-item" href="#">{{ auth()->user()->name }}</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    @else
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        </ul>
                    @endauth
                </li>

            </ul>
        </div>
    </div>
</nav>
