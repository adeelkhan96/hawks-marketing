  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{route('home')}}" class="logo">
                          <img src="assets/images/logo.png" alt="Hawks Marketing">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                          <li><a href="{{ route('our-services') }}" class="{{ request()->routeIs('our-services') ? 'active' : '' }}">Our Services</a></li>
                          <li><a href="{{ route('about-us') }}" class="{{ request()->routeIs('about-us') ? 'active' : '' }}">About Us</a></li>
                          <li><a href="{{ route('clients') }}" class="{{ request()->routeIs('clients') ? 'active' : '' }}">Clients</a></li>
                          <li><a href="{{ route('career') }}" class="{{ request()->routeIs('career', 'career.job', 'career.apply.form', 'career.apply') ? 'active' : '' }}">Career</a></li>
                          <li><a href="{{ route('blogs') }}" class="{{ request()->routeIs('blogs', 'blog.show') ? 'active' : '' }}">Blogs</a></li>
                          <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
                      </ul>
                      <a class='menu-trigger' href="javascript:void(0)">
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
