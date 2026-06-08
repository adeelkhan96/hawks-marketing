@extends('layouts.base')
@section('title','Ecommerce Web Development | Hawks Marketing')
@section('meta-title','Ecommerce Web Development | Hawks Marketing')
@section('meta-description','Fully featured, conversion-optimised ecommerce stores by Hawks Marketing — fast, secure, and user-friendly online shops with complete product management and payment integrations.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'ecommerce-development'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Ecommerce Stores Built to Sell') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'A great ecommerce store does more than list products — it guides visitors seamlessly from discovery to purchase. Hawks Marketing build fully featured online stores designed to convert browsers into buyers.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We build fast, secure, and user-friendly ecommerce platforms with complete product management, payment gateway integrations, order tracking, and inventory systems.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Ecommerce?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Conversion-Focused') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Store architecture and UX designed to reduce friction and increase purchase completion rates.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Secure Payments') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Reliable payment gateway integrations with industry-standard security and fraud protection.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Scalable') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Built to handle growing product catalogs and increasing traffic without performance degradation.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>What We Offer</h6>
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Ecommerce Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-store"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Custom Ecommerce Development') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Fully custom online store development tailored to your product range, customer journey, and business processes — built for performance and scalability.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-credit-card"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Payment Gateway Integration') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Smooth, secure integration with major payment processors — credit cards, bank transfers, and local payment methods — for a frictionless checkout experience.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-boxes-stacked"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Product & Inventory Management') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Intuitive admin panels for managing products, categories, stock levels, orders, and customer data — giving you complete control over your store operations.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-mobile-alt"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Mobile-Optimised Shopping') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Fully responsive store designs that deliver a seamless shopping experience on smartphones and tablets — where the majority of ecommerce traffic comes from.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Launch</em> Your <strong>Online Store?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Start Your Store</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
@endsection
