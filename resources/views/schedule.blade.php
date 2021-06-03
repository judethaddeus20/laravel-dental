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
          <li>Schedule</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->

  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12">
          <form action="{{ url('schedule') }}" method="post">
          @csrf
          <div class="card-header">
            <p class="fs-4 fw-bold">Schedule Appointmnent</p>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="input-group mb-3">
                <span class="input-group-text">Date and Time</span>
                <input class="form-control @error('dateTime') is-invalid @enderror" type="datetime-local" value="{{ old('dateTime') }}" name="dateTime"  id="dateField">
                @error('dateTime')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <span class="input-group-text" id="email">E-mail Address</span>
                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="johndoe@gmail.com" value="{{ old('email') }}" name="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="number">Contact Number</span>
                <input type="text" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') }}" name="number">
                @error('number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="row">
                <div class="col">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="first_name">First Name</span>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" name="first_name">
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="last_name">Last Name</span>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" name="last_name">
                    @error('last_name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-floating">
                    <select class="form-select @error('status') is-invalid @enderror" id="status" aria-label="status" name="status">
                      <option selected value="">Choose option</option>
                      <option value="New Patient">New Patient</option>
                      <option value="Old Patient">Old Patient</option>
                    </select>
                    <label for="floatingSelectGrid">Patient Status</label>
                    @error('status')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <select class="form-select @error('service') is-invalid @enderror" id="service" aria-label="service" name="service">
                      <option selected value="">Choose option</option>
                      <option value="Root Canal Treatment">Root Canal Treatment</option>
                      <option value="Cosmetic Dentist">Cosmetic Dentist</option>
                      <option value="Dental Implants">Dental Implants</option>
                    </select>
                    <label for="floatingSelectGrid">Services</label>
                    @error('service')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>




              <div class="form-group mt-4">
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->
@endsection
@section('scripts')

@endsection
@section('css')

@endsection
