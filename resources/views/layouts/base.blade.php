<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @php
        $metaTitle       = trim(strip_tags(@yield('meta-title', @yield('title', 'Hawks Marketing'))));
        $metaDescription = trim(strip_tags(@yield('meta-description', 'Hawks Marketing — A results-driven digital marketing agency offering SEO, social media management, content writing, PPC, and custom web development.')));
        $metaImage       = @yield('meta-image', asset('assets/images/logo.png'));
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
      "@context": "https://schema.org",
      "@type": "MarketingAgency",
      "name": "Hawks Marketing",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('assets/images/logo.png') }}",
      "description": "Hawks Marketing is a results-driven digital marketing agency offering SEO, social media management, content writing, PPC, and custom web development.",
      "contactPoint": {
        "@type": "ContactPoint",
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
    <link rel="stylesheet" href="{{ asset('assets/css/hawks-custom.css') }}?v=3">
<!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
    @yield('head')
  </head>

  <body class="@yield('body-class')">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @yield('js')
  </body>
</html>