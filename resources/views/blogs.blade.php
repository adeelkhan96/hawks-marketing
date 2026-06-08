@extends('layouts.base')
@section('title','Blogs | Hawks Marketing')
@section('meta-title','Blogs | Hawks Marketing')
@section('meta-description','Read the latest insights, tips, and strategies from the Hawks Marketing team on digital marketing, SEO, branding, and more.')
@section('content')

  <section class="placeholder-page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="placeholder-icon">
            <i class="fas fa-pen-nib"></i>
          </div>
          <h2>Our Blog</h2>
          <p>Insights, strategies, and tips from the Hawks Marketing team are coming soon. Stay tuned for articles on digital marketing, SEO, branding, and business growth.</p>
          <div class="orange-button" style="display:inline-block;">
            <a href="{{ route('home') }}">Back to Home</a>
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
