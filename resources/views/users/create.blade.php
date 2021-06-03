@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-lg-12 d-flex justify-content-center">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Create User</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('users.store') }}" method="post">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
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
          <div class="form-group">
            <label for="location">Location</label>
            <textarea id="location" class="form-control @error('location') is-invalid @enderror" rows="2" name="location"></textarea>
            @error('location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select id="role" name="role" class="form-control custom-select @error('role') is-invalid @enderror">
              <option selected disabled>Select one</option>
              <option value="admin">Admin</option>
              <option value="staff">Staff</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-md-4">
              <label for="age">Age</label>
              <input type="text" id="age" class="form-control @error('age') is-invalid @enderror" name="age">
              @error('age')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-lg-12">
              <label for="password">Password</label>
              <input type="text" id="password" class="form-control @error('password') is-invalid @enderror" name="password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="card-footer">
            <div class="col-12">
              <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Add User" class="btn btn-success float-right">
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
