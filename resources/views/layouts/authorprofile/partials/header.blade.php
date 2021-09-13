<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">
    <a href="{{ route('index') }}" class="logo me-auto">
      <img src="{{ asset('assets/frontend/img/home_page/dc-logo.png') }}" alt="" class="img-fluid">
    </a>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="">My Orders</a></li>
        <li><a href="{{ route('author.cart') }}">Cart</a></li>
        <li><a href="{{ route('author.quotes') }}">Quotes</a></li>
        <li><a href="{{ route('author.billing') }}">Billing</a></li>
        <li><a href="">Help</a></li>
        <li class="drop-down text-white text-left">{{ Auth::user()->name }}
          <ul>
            <li><a href="{{ route('author.account') }}">Account</a></li>
            <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>