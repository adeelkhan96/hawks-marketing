<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @php
        $metaTitle       = trim(strip_tags($__env->yieldContent('meta-title') ?: $__env->yieldContent('title') ?: 'Hawks Marketing'));
        $metaDescription = trim(strip_tags($__env->yieldContent('meta-description') ?: 'Hawks Marketing — A results-driven digital marketing agency offering SEO, social media management, content writing, PPC, and custom web development.'));
        $metaImage       = $__env->yieldContent('meta-image') ?: asset('assets/images/logo.png');
        $canonicalUrl    = url()->current();
    @endphp

    <title>@yield('title')</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="author" content="Hawks Marketing">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo.png') }}">

    <!-- Open Graph (Facebook / LinkedIn / WhatsApp) -->
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="Hawks Marketing">
    <meta property="og:title"       content="{{ $metaTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:image"       content="{{ $metaImage }}">
    <meta property="og:url"         content="{{ $canonicalUrl }}">

    <!-- Twitter Card -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="{{ $metaTitle }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image"       content="{{ $metaImage }}">

    <!-- Schema.org JSON-LD: Organization -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "MarketingAgency",
      "name": "Hawks Marketing",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('assets/images/logo.png') }}",
      "description": "Hawks Marketing is a results-driven digital marketing agency offering SEO, social media management, content writing, PPC, and custom web development.",
      "contactPoint": {
        "@@type": "ContactPoint",
        "contactType": "customer service",
        "url": "{{ route('contact') }}"
      },
      "sameAs": [
        "https://www.instagram.com/hawksmarketing.pk",
        "https://www.facebook.com/profile.php?id=61577364703717",
        "https://www.linkedin.com/company/the-hawks-marketing"
      ]
    }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/templatemo-574-mexant.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/hawks-custom.css') }}?v=6">
<!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
    @yield('head')
<style>
/* =====================================================
   OVERRIDE STYLES — loaded inline to guarantee delivery
   ===================================================== */

/* --- Home: Services Grid --- */
.services-grid-section {
  background: #212741 !important;
  padding: 90px 0 !important;
}
.services-grid-section .section-heading h4 { color: #fff !important; }
.services-grid-section .section-heading h6 { color: #ff511a !important; }
.service-category-card {
  background: rgba(255,255,255,0.05) !important;
  border: 1px solid rgba(255,255,255,0.1) !important;
  border-left: 4px solid #ff511a !important;
  border-radius: 10px !important;
  padding: 28px 26px !important;
  transition: all 0.3s ease !important;
  height: 100% !important;
}
.service-category-card:hover {
  background: rgba(255,255,255,0.09) !important;
  border-color: rgba(255,81,26,0.5) !important;
  border-left-color: #ff511a !important;
  transform: translateY(-5px) !important;
  box-shadow: 0 16px 40px rgba(0,0,0,0.25) !important;
}
.service-category-card h5 {
  font-size: 15px !important;
  font-weight: 700 !important;
  color: #fff !important;
  margin-bottom: 14px !important;
  padding-bottom: 12px !important;
  border-bottom: 1px solid rgba(255,255,255,0.1) !important;
  display: flex !important;
  align-items: center !important;
  gap: 12px !important;
}
.service-category-card h5 a,
.service-category-card h5 a:link,
.service-category-card h5 a:visited {
  color: #fff !important;
  text-decoration: none !important;
}
.service-category-card h5 a:hover { color: #ff511a !important; }
.service-category-card .scc-icon {
  width: 38px !important;
  height: 38px !important;
  background: rgba(255,81,26,0.2) !important;
  border-radius: 8px !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  flex-shrink: 0 !important;
}
.service-category-card .scc-icon i { color: #ff511a !important; font-size: 16px !important; }
.service-category-card ul {
  list-style: none !important;
  padding: 0 !important;
  margin: 0 !important;
}
.service-category-card ul li {
  padding: 7px 0 !important;
  border-bottom: 1px solid rgba(255,255,255,0.06) !important;
  display: flex !important;
  align-items: center !important;
  gap: 8px !important;
  font-size: 13.5px !important;
}
.service-category-card ul li:last-child { border-bottom: none !important; }
.service-category-card ul li::before {
  content: '\203A' !important;
  color: #ff511a !important;
  font-size: 18px !important;
  font-weight: 700 !important;
  flex-shrink: 0 !important;
  line-height: 1 !important;
}
.service-category-card ul li a,
.service-category-card ul li a:link,
.service-category-card ul li a:visited {
  color: rgba(255,255,255,0.65) !important;
  text-decoration: none !important;
}
.service-category-card ul li a:hover { color: #ff511a !important; }

/* --- Footer --- */
.hawks-footer {
  background: #181f36 !important;
}
.hawks-footer a,
.hawks-footer a:link,
.hawks-footer a:visited {
  color: rgba(255,255,255,0.6) !important;
  text-decoration: none !important;
}
.hawks-footer a:hover { color: #ff511a !important; }
.hawks-footer .footer-col-heading {
  color: #ffffff !important;
  font-size: 13px !important;
  font-weight: 700 !important;
  text-transform: uppercase !important;
  letter-spacing: 1.5px !important;
  margin-bottom: 20px !important;
  padding-bottom: 10px !important;
  border-bottom: 2px solid #ff511a !important;
}
.hawks-footer .footer-col-heading::after { display: none !important; }
.hawks-footer .footer-links {
  list-style: none !important;
  padding: 0 !important;
  margin: 0 !important;
}
.hawks-footer .footer-links li { margin-bottom: 8px !important; }
.hawks-footer .footer-links li a,
.hawks-footer .footer-links li a:link,
.hawks-footer .footer-links li a:visited {
  color: rgba(255,255,255,0.6) !important;
  font-size: 13px !important;
}
.hawks-footer .footer-links li a:hover { color: #ff511a !important; }
.hawks-footer .footer-contact-list {
  list-style: none !important;
  padding: 0 !important;
  margin: 0 !important;
}
.hawks-footer .footer-contact-list li {
  color: rgba(255,255,255,0.65) !important;
  font-size: 13px !important;
  margin-bottom: 12px !important;
  display: flex !important;
  align-items: flex-start !important;
  gap: 10px !important;
  line-height: 1.5 !important;
}
.hawks-footer .footer-contact-list li i { color: #ff511a !important; margin-top: 2px !important; flex-shrink: 0 !important; }
.hawks-footer .footer-contact-list li a,
.hawks-footer .footer-contact-list li a:link,
.hawks-footer .footer-contact-list li a:visited {
  color: rgba(255,255,255,0.65) !important;
}
.hawks-footer .footer-contact-list li a:hover { color: #ff511a !important; }
.hawks-footer .footer-tagline { color: rgba(255,255,255,0.5) !important; }
.hawks-footer .footer-bottom { text-align: center !important; padding: 18px 0 !important; border-top: 1px solid rgba(255,255,255,0.07) !important; }
.hawks-footer .footer-bottom p { color: rgba(255,255,255,0.35) !important; font-size: 13px !important; margin: 0 !important; }
.hawks-footer .footer-social a {
  background: rgba(255,255,255,0.08) !important;
  border: 1px solid rgba(255,255,255,0.15) !important;
  color: rgba(255,255,255,0.7) !important;
}
.hawks-footer .footer-social a:hover { background: #ff511a !important; border-color: #ff511a !important; color: #fff !important; }
</style>
  </head>

  <body class="@yield('body-class')">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @yield('js')
  </body>
</html>