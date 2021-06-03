@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-lg-12 d-flex justify-content-center">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Show User</h3>
      </div>
      <div class="card-body">
        <form action="{{ url('users', $user->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" readonly>
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="number">Phone Number</label>
              <input id="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ $user->number }}" readonly></input>
              @error('number')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="location">Location</label>
            <input id="location" class="form-control @error('location') is-invalid @enderror" rows="2" name="location" value="{{ $user->location }}" readonly></input>
            @error('location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select id="role" name="role" class="form-control custom-select @error('role') is-invalid @enderror" readonly>
              <option selected disabled>Select one</option>
              <option @if(old('role',$user->role) == 'admin') selected @endif>Admin</option>
              <option @if(old('role',$user->role) == 'staff') selected @endif>Staff</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" readonly>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-4">
              <label for="age">Age</label>
              <input type="text" id="age" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $user->age }}" readonly>
              @error('age')
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
