@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Schedules</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Schedule ID</th>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Service</th>
            <th>Patient Status</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Date and Time</th>
            <th>Confirmation</th>
            <th></th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($schedules as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->customer_id }}</td>
            <td>{{ $item->customer_name }}</td>
            <td>{{ $item->service }}</td>
              @if($item->patient_status != "New Patient")
                  <td>{{ __('Old Patient') }}</td>
                  @else <td>{{ __('New Patient') }}</td>
              @endif
            <td>{{ $item->contact_number }}</td>
            <td>{{ ucfirst(trans($item->email)) }}</td>
            <td>{{ $item->dateTime }}</td>
            @if($item->confirmation == 0)
              <td class="text-bold">Pending</td>
            @elseif($item->confirmation == 1)
              <td class="text-bold ">Approved</td>
            @else
              <td class="text-bold ">Declined</td>
            @endif
            <td class="project-actions">
              <div class="d-flex flex-row">
                <div class="p-2">
                  <a class="btn btn-primary btn-sm" href="{{ route('schedules.show',$item->id) }}">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>
                </div>
                <div class="p-2">
                  <a class="btn btn-primary btn-sm" href="{{ route('schedules.edit',$item->id) }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                  </a>
                </div>
                <div class="p-2">
                  <form action="{{ url('schedules',$item->id) }}" method="post" class="float-right ml-1">
                    <a class="btn btn-danger btn-sm">
                      @csrf
                      @method('DELETE')
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </form>
                </div>
              </div>
            </td>
            <td class="project-actions text-right">
            <div class="d-flex flex-row">
              <div class="p-2">
                <a class="btn btn-success btn-sm" href="{{ url('approve',$item->id) }}">
                  @csrf
                  @method('PATCH')
                  <i class="fas fa-check">
                  </i>
                  Aprrove
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-warning btn-sm" href="{{ url('decline',$item->id) }}">
                  <i class="fas fa-trash">
                  </i>
                  Decline
                </a>
              </div>
              </td>
            </div>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
@endsection
