<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">
    <a href="{{ route('index') }}" class="logo me-auto">
      <img src="{{ asset('assets/frontend/img/home_page/dc-logo.png') }}" alt="dc-logo" class="img-fluid">
    </a>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="drop-down"><a href="">Services</a>
          <ul>
            <li><a href="{{ route('clipping.path') }}">Clipping Path</a></li>
            <li><a href="{{ route('background.removal') }}">Background Removal</a></li>
            <li><a href="{{ route('image.masking') }}">Image Masking</a></li>
            <li><a href="{{ route('natural.shadow') }}">Natural Shadow</a></li>
            <li><a href="{{ route('photo.retouching') }}">Photo Retouching</a></li>
            <li><a href="{{ route('ghosht.manneuquin') }}">Ghost Mannequin</a></li>
            <li><a href="{{ route('product.photo.editing') }}">Product Photo Editing</a></li>
            <li><a href="{{ route('color.correction') }}">Color Correction</a></li>
            <li><a href="{{ route('vector.conversion') }}">Vector Conversion</a></li>
          </ul>
        </li>
        <li><a href="{{ route('pricing') }}">Pricing</a></li>
        <li><a href="{{ route('sample') }}">Samples</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        @if(auth()->user())
        <li><a href="{{ route('author.dashboard') }}">My Account</a></li>
        @else
        <li><a href="{{ route('login') }}">Login</a></li>
        @endif
      </ul>
    </nav>
    <!-- .nav-menu -->
    <a href="{{ route('get.quote') }}" class="get-started-btn scrollto">Get Quote</a>
  </div>
</header>