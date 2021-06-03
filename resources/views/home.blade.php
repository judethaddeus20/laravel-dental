@extends('layouts.app')

@section('content')
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2></h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Information</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->

  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper-container">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/dental/dental.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/dental/dental 2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/dental/dental 3.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>About Us</h3>
            <ul>
              <li>We are here to change the world for a healthier lifestyle</li>
              <li><strong>Established</strong>: 01 March, 2020</li>
              <li><strong>Contact Us</strong>: <a href="#">09167075753</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Why Dental Health is important?</h2>
            <p>
              Practicing good dental health is important to maintaining a healthy mouth, teeth and gums. It will also help your appearance and quality of life.
              We can help you decide how to address the problems. Braces, once for adolescents only, can help people of all ages correct problems with their teeth and jaws. Not only do orthodontic procedures help your appearance, but they can also improve chewing and proper digestion of food along with some speech problems.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection
