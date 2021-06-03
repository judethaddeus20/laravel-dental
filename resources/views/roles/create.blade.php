@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-lg-12 d-flex justify-content-center">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Create User</h3>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" id="name" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="number">Phone Number</label>
              <input id="number" class="form-control"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="location">Location</label>
            <textarea id="location" class="form-control" rows="2"></textarea>
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select id="role" class="form-control custom-select">
              <option selected disabled>Select one</option>
              <option>Admin</option>
              <option>Staff</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="email">Email</label>
              <input type="text" id="email" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="age">Age</label>
              <input type="text" id="age" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="col-12">
          <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Add User" class="btn btn-success float-right">
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

</div>
@endsection
