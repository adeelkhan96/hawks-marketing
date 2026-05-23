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
                          <li class="scroll-to-section"><a href="{{route('home')}}" class="active">Home</a></li>
                          <li><a href="{{ route('about-us') }}">About Us</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Services</a>
                              <ul class="sub-menu">
                                  <li><a href="{{ route('our-services') }}">All Services</a></li>
                                  <li><a href="{{ route('seo-services') }}">SEO Services</a></li>
                                  <li><a href="{{ route('social-media') }}">Social Media Management</a></li>
                                  <li><a href="{{ route('content-writing') }}">Content Writing</a></li>
                                  <li><a href="{{ route('web-development') }}">Website Development</a></li>
                              </ul>
                          </li>
                          <li><a href="{{ route('contact') }}">Contact</a></li>
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
