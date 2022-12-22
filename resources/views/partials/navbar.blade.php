<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">MeTime</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="d-flex align-items-center">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ Request()->is('/') ? 'active' : '' }}" href="/">Home</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link {{ Request()->is('timeline') ? 'active' : '' }}" href="/timeline">Timeline</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request()->is('counselling') ? 'active' : '' }}" href="/counselling">Counselling</a>
              </li>
              @else
              @endauth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >
                  <i class="fas fa-user-alt"></i>
                </a>
                <ul class="dropdown-menu">
                  @auth
                  <li><a class="dropdown-item {{ Request()->is('profile') ? 'active' : '' }}" href="/profile"><i class="fas fa-user-edit"></i> &nbsp; Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class='fas fa-sign-out-alt'></i> &nbsp; Logout</a></button>
                    </form>
                  </li>
                  @else
                  <li><a class="dropdown-item {{ Request()->is('login') ? 'active' : '' }}" href="/login"><i class="fas fa-sign-in-alt"></i> &nbsp; Login</a></li>
                  <li><a class="dropdown-item {{ Request()->is('register') ? 'active' : '' }}" href="/register"><i class="far fa-id-card"></i> &nbsp; Register</a></li>
                  @endauth
                </ul>
              </li>
            </ul>
        </div>
      </div>
    </div>
</nav>