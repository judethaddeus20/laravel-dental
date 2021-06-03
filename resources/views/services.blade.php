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
          <li>Services</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->

  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12">
            <section id="portfolio-details" class="portfolio-details">
              <div class="container">
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Root Canal Treatment
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                          <div class="accordion-body">
                             is a dental procedure used to treat infection at the centre of a tooth. Root canal treatment is not painful and can save a tooth that might otherwise have to be removed completely.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Cosmetic Dentist
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                          <div class="accordion-body">
                            This method of professional oral care focuses on improving the appearance of your mouth, teeth, gums, and overall smile.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Dental Implants
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                          <div class="accordion-body">
                            A metal post that replaces the root portion of a missing tooth. An artificial tooth is placed on an extension of
                              the post on the dental implant, giving you the look of a real tooth.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

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
                </div>
              </div>
            </section><!-- End Portfolio Details Section -->
        </div>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection
