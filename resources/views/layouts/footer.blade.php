
<footer class="hawks-footer">
  <div class="container">
    <div class="row footer-top">

      {{-- Brand --}}
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <div class="footer-brand">
          <a href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Hawks Marketing" class="footer-logo">
          </a>
          <p class="footer-tagline">Connecting brands with Future</p>
          <div class="footer-social">
            <a href="https://www.instagram.com/hawksmarketing.pk" target="_blank" rel="noopener" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61577364703717" target="_blank" rel="noopener" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/company/the-hawks-marketing" target="_blank" rel="noopener" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      {{-- Quick Links --}}
      <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
        <h5 class="footer-col-heading">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about-us') }}">About Us</a></li>
          <li><a href="{{ route('our-services') }}">Our Services</a></li>
          <li><a href="{{ route('clients') }}">Clients</a></li>
          <li><a href="{{ route('career') }}">Career</a></li>
          <li><a href="{{ route('blogs') }}">Blogs</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
      </div>

      {{-- Services --}}
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <h5 class="footer-col-heading">Our Services</h5>
        <div class="row">
          <div class="col-6">
            <ul class="footer-links">
              <li><a href="{{ route('seo-services') }}">SEO Services</a></li>
              <li><a href="{{ route('social-media') }}">Social Media</a></li>
              <li><a href="{{ route('ppc-advertising') }}">PPC Advertising</a></li>
              <li><a href="{{ route('graphic-designing') }}">Graphic Designing</a></li>
              <li><a href="{{ route('ui-ux-designing') }}">UI/UX Design</a></li>
              <li><a href="{{ route('video-editing') }}">Video Editing</a></li>
              <li><a href="{{ route('logo-designing') }}">Logo Designing</a></li>
            </ul>
          </div>
          <div class="col-6">
            <ul class="footer-links">
              <li><a href="{{ route('web-development') }}">Web Development</a></li>
              <li><a href="{{ route('app-development') }}">App Development</a></li>
              <li><a href="{{ route('branding-service') }}">Branding</a></li>
              <li><a href="{{ route('content-writing') }}">Content Writing</a></li>
              <li><a href="{{ route('blog-writing') }}">Blog Writing</a></li>
              <li><a href="{{ route('business-analysis') }}">Business Analysis</a></li>
              <li><a href="{{ route('consultation') }}">Consultation</a></li>
            </ul>
          </div>
        </div>
      </div>

      {{-- Contact --}}
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <h5 class="footer-col-heading">Contact Us</h5>
        <ul class="footer-contact-list">
          <li>
            <i class="fas fa-phone-alt"></i>
            <a href="tel:+923369864931">+92 336 986 4931</a>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <a href="tel:+923135934637">+92 313 593 4637</a>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <a href="mailto:info@thehawksmarketing.com">info@thehawksmarketing.com</a>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <a href="mailto:Hawksmarketing2025@gmail.com">Hawksmarketing2025@gmail.com</a>
          </li>
        </ul>
      </div>

    </div>{{-- /.row footer-top --}}

    <div class="footer-bottom">
      <p>&copy; 2026 Hawks Marketing. All Rights Reserved.</p>
    </div>

  </div>
</footer>
