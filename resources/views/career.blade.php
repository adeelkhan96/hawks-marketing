@extends('layouts.base')
@section('title','Career | Hawks Marketing')
@section('meta-title','Career | Hawks Marketing')
@section('meta-description','Join the Hawks Marketing team. Explore career opportunities at a fast-growing digital marketing agency in Islamabad, Pakistan.')
@section('content')

  <section class="placeholder-page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="placeholder-icon">
            <i class="fas fa-briefcase"></i>
          </div>
          <h2>Career Opportunities</h2>
          <p>We're always looking for talented, driven individuals to join the Hawks Marketing team. Check back soon for open positions — or reach out directly to express your interest.</p>
          <div class="orange-button" style="display:inline-block;">
            <a href="{{ route('contact') }}">Get In Touch</a>
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
