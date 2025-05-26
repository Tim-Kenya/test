<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('public/layout/test/assets/img/logo.png') }}') }}" alt=""> -->
        <h1 class="sitename">Company</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('test.index')}}">Home</a></li>
          <li><a href="{{ route('test.aboutus')}}">About Us</a></li>
          <li><a href="{{ route('test.contacts')}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
