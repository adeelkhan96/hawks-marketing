@extends('layouts.base')
@section('title','Our Clients | Hawks Marketing')
@section('meta-title','Our Clients | Hawks Marketing')
@section('meta-description','Hawks Marketing proudly serves a growing portfolio of clients across various industries. See the brands we work with.')
@section('content')

  <section class="clients-page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Who We Work With</h6>
            <h4>Our Clients</h4>
          </div>
        </div>
      </div>

      @if($companies->isNotEmpty())
      <div class="row justify-content-center">
        @foreach($companies as $company)
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="client-card">
            <img src="{{ asset($company->logo) }}" alt="{{ $company->name }}">
            <h6>{{ $company->name }}</h6>
          </div>
        </div>
        @endforeach
      </div>
      @else
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <p style="color:#777; font-size:16px;">Client logos coming soon.</p>
        </div>
      </div>
      @endif
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to join our <em>Growing</em> <strong>Client Family?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Get In Touch</a>
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
