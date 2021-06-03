@extends('layouts.dashboard')
@section('content')
<div class="card card-solid">
  <div class="card-header">
    All Details
  </div>
  <div class="card-body pb-0">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow-sm">
          <span class="info-box-icon bg-warning"><i class="fas fa-calendar"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Schedules</span>
            <span class="info-box-number">{{ $schedules->count() }}</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow-sm">
          <span class="info-box-icon bg-info"><i class="fas fa-user"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Users</span>
            <span class="info-box-number">{{ $users->count() }}</span>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>
<div class="card card-solid">
  <div class="card-header">
    Schedule Details
  </div>
    <div class="card-body pb-0">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box shadow-sm">
            <span class="info-box-icon bg-secondary"><i class="fas fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Pending</span>
              <span class="info-box-number">{{ $schedules->where('confirmation','==', 0)->count() }}</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box shadow-sm">
            <span class="info-box-icon bg-success"><i class="fas fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Approved</span>
              <span class="info-box-number">{{ $schedules->where('confirmation','==', 1)->count() }}</span>
            </div>
          </div>

        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box shadow-sm">
            <span class="info-box-icon bg-danger"><i class="fas fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Declined</span>
              <span class="info-box-number">{{ $schedules->where('confirmation','==', 2)->count() }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
