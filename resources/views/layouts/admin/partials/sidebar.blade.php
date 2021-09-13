<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('assets/backend/images/nayeem.png') }}" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
      <p class="app-sidebar__user-designation">{{ auth()->user()->email }}</p>
    </div>
  </div>
  <ul class="app-menu">
    
    @if(Request::is('admin*'))
    <li>
      <a class="{{ Request::is('admin/dashboard') ? 'active' : '' }} app-menu__item" href="{{ route('admin.dashboard') }}">
        <i class="app-menu__icon fas fa-tachometer-alt"></i>
        <span class="app-menu__label">Dashboard</span>
      </a>
    </li>
        <li>
      <a class="{{ Request::is('admin/registeredpeople') ? 'active' : '' }} app-menu__item" href="{{ route('admin.registeredpeople.index') }}">
        <i class="app-menu__icon far fa-registered"></i>
        <span class="app-menu__label">Register</span>
      </a>
    </li>
    <li>
      <a class="{{ Request::is('admin/freetrial') ? 'active' : '' }} app-menu__item" href="{{ route('admin.freetrial.index') }}">
        <i class="app-menu__icon fas fa-adjust"></i>
        <span class="app-menu__label">Freetrial</span>
      </a>
    </li>
    <li>
      <a class="{{ Request::is('admin/contact') ? 'active' : '' }} app-menu__item" href="{{ route('admin.contact.index') }}">
        <i class="app-menu__icon fa fa-address-book"></i>
        <span class="app-menu__label">Contact Us</span>
      </a>
    </li>
    <li>
      <a class="{{ Request::is('admin/getquote') ? 'active' : '' }} app-menu__item" href="{{ route('admin.getquote.index') }}">
        <i class="app-menu__icon fa fa-laptop"></i>
        <span class="app-menu__label">Get Quote</span>
      </a>
    </li>
    <li>
      <a class="{{ Request::is('admin/subscribers') ? 'active' : '' }} app-menu__item" href="{{ route('admin.subscribers.index') }}">
        <i class="app-menu__icon fas fa-mail-bulk"></i>
        <span class="app-menu__label">Subscribers</span>
      </a>
    </li>
    @endif
  </ul>
</aside>