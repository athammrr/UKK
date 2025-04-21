<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <div class="bg-white rounded px-4 py-2">
        <h1 class="text-dark">HOTEL HEBAT</h1>
    </div>  

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- User Dropdown -->  
        @php
            $role = Auth::user()->role ?? 'guest'; 
        @endphp
        @if ($role == 'admin')
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('kamar.index') }}">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark"  href="{{ route('fakamar.index') }}">Fasilitas Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('fahotel.index') }}">Fasilitas Hotel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('admin.index') }}" status >Kelola Akun</a>
            </li>
        @else
        @endif
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="{{ asset('bootstrap/img/undraw_profile.svg') }}" width="32" height="32">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
