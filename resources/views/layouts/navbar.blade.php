<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        {{-- Logo --}}
        <a class="navbar-brand" href="{{ route('homepage') }}">Bootstrap Demo</a>

        {{-- Hamburger-button --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            {{-- Links --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jobs.index') }}">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employees.index') }}">Employees</a>
                </li>
            </ul>

            {{-- Authentication Buttons --}}
            @if (Route::has('login'))
                @auth
                    <div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"
                                class="btn btn-outline-secondary">Logout</a>
                        </form>
                    </div>
                @else
                    <div>
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                        @endif
                    </div>
                @endauth
            @endif
        </div>
    </div>
</nav>
