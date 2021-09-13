<header class="app-header"><a class="app-header__logo" href="{{ route('admin.dashboard') }}">Designer Country</a>
    <!-- Sidebar toggle button--><a class="text-light" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class="app-menu__icon fas fa-bars" style="padding: 16px 32px 0px 15px; font-size: 20px;"></i></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li>
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="{{ route('admin.account') }}"><i class="fa fa-user fa-lg"></i> Profile</a></li>
          <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out fa-lg"></i> Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </li>
        </ul>
      </li>
    </ul>
</header>