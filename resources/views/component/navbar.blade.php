 <!-- Nav -->
 <nav class="navbar navbar-expand-lg" style="background-color: #f88158;">
    <div class="container py-2">
        {{-- check if user is logged in --}}
        @auth
            <div class="navbar-nav">
                <a class="nav-link" style="color: white;" href="{{ '/' }}">Pod Nashima</a>
            </div>
            <div class="d-flex">
                <div class="dropdown ms-4">
                    <button class="btn btn-dark dropdown-toggle text-" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        {{-- Logout --}}
                        <li>
                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="navbar-nav w-100 d-flex justify-content-between">
                <a class="nav-link active" aria-current="page" href="{{ '/' }}">Pod Nashima</a>
                <a class="nav-link" href="{{ 'login' }}">Login</a>
            </div>
        @endauth

    </div>
</nav>
<!-- Nav End -->