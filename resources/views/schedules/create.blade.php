@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-lg-12 d-flex justify-content-center">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Create Schedule</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('schedules.store') }}" method="post">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name">
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="number">Phone Number</label>
              <input id="number" class="form-control @error('number') is-invalid @enderror" name="number"></input>
              @error('number')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="service">Service</label>
              <select id="service" class="form-control custom-select @error('service') is-invalid @enderror" name="service">
                <option selected disabled>Select one</option>
                <option value="Root Canal Treatment">Root Canal Treatment</option>
                <option value="Cosmetic Dentist">Cosmetic Dentist</option>
                <option value="Dental Implants">Dental Implants</option>
                @error('service')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="status">Patient Status</label>
              <select id="status" class="form-control custom-select @error('status') is-invalid @enderror" name="status">
                <option selected disabled>Select one</option>
                <option value="1">New Patient</option>
                <option value="2">Old Patient</option>
                @error('status')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="dateTime">Date and Time</label>
              <input type="datetime-local" id="dateTime" class="form-control @error('dateTime') is-invalid @enderror" name="dateTime">
              @error('dateTime')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="email">Email</label>
              <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

          </div>
          <div class="card-footer">
            <div class="col-12">
              <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Add Schedule" class="btn btn-success float-right">
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

</div>
@endsection
