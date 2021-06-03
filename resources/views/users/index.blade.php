@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Users</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Location</th>
            <th>Role(s)</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($data as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ ucfirst(trans($item->name)) }}</td>
            <td>{{ $item->age }}</td>
            <td>{{ $item->number }}</td>
            <td>{{ ucfirst(trans($item->location)) }}</td>
            <td>{{ ucfirst(trans($item->role)) }}</td>
            <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="{{ route('users.show', $item->id)}}">
                    <i class="fas fa-folder">
                    </i>
                    View
                </a>
                <a class="btn btn-info btn-sm" href="{{ route('users.edit', $item->id)}}">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <form action="{{ url('users',$item->id) }}" method="POST" class="float-right ml-1">
                  @csrf
                  @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit">
                  <i class="fas fa-trash">
                  </i>
                  Delete
                </button>
                </form>
            </td>
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
