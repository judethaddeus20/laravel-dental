@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-lg-12 d-flex justify-content-center">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Show Schedule</h3>
      </div>
      <div class="card-body">
        <form action="{{ url('schedules', $schedule->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $schedule->customer_name }}" readonly>
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="number">Phone Number</label>
              <input id="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ $schedule->contact_number }}" readonly></input>
              @error('number')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="service">Service</label>
            <select id="service" name="service" class="form-control custom-select @error('service') is-invalid @enderror" readonly>
              <option selected disabled>Select one</option>
              <option @if(old('service',$schedule->service) == "Root Canal Treatment") selected @endif>Root Canal Treatment</option>
              <option @if(old('service',$schedule->service) == "Cosmetic Dentist") selected @endif>Cosmetic Dentist</option>
              <option @if(old('service',$schedule->service) == "Dental Implants") selected @endif>Dental Implants</option>
            </select>
          </div>
          <div class="form-group">
            <label for="status">Patient Status</label>
            <select id="status" name="status" class="form-control custom-select @error('status') is-invalid @enderror" readonly>
              <option selected disabled>Select one</option>
              <option @if(old('status',$schedule->patient_status) == "New Patient") selected @endif>New Patient</option>
              <option @if(old('status',$schedule->patient_status) == "Old Patient") selected @endif>Old Patient</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $schedule->email }}" readonly>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-12">
              <label for="date">Scheduled on</label>
              <input type="text" id="dateTime" class="form-control @error('dateTime') is-invalid @enderror" name="dateTime" value="{{ $schedule->dateTime }}" readonly>
              @error('dateTime')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="card-footer">
            <div class="col-12">
              <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
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
