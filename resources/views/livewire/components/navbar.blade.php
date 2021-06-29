<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">SPA with Livewire</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
             @auth
             <li class="nav-item">
              <p class="text text-white">Welcome, <span class="text text-while">{{ auth()->user()->name }}</span></p>
            </li>
             <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('logout') ? 'active' : '' }}" wire:click.prevent="logout" href="{{ route('logout') }}">Logout</a>
            </li>
               @else
                <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                </li>
             @endauth
            </ul>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="text" placeholder="Search">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</div>
