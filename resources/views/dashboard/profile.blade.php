@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle"
               src="../../dist/img/SamplePhoto.png"
               alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">{{ ucfirst(trans($user->name)) }}</h3>

        <p class="text-muted text-center">{{ ucfirst(trans($user->email)) }}</p>

        <!-- <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Followers</b> <a class="float-right">0</a>
          </li>
          <li class="list-group-item">
            <b>Following</b> <a class="float-right">0</a>
          </li>
          <li class="list-group-item">
            <b>Friends</b> <a class="float-right">0</a>
          </li>
        </ul> -->

        <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- About Me Box -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">About Me</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <strong><i class="fas fa-book mr-1"></i> Role</strong>

        <p class="text-muted">
          {{ucfirst(trans($user->role))}}
        </p>

        <hr>

        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

        <p class="text-muted">{{ ucfirst(trans($user->location)) }}</p>

        <!-- <hr>

        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

        <p class="text-muted">
          <span class="tag tag-danger">UI Design</span>
          <span class="tag tag-success">Coding</span>
          <span class="tag tag-info">Javascript</span>
          <span class="tag tag-warning">PHP</span>
          <span class="tag tag-primary">Node.js</span>
        </p>

        <hr>

        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
          <li class="nav-item"><a class="nav-link" href="#information" data-toggle="tab">Personal Information</a></li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <!-- Post -->
            <div class="post">
              <div class="user-block">
                <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                <span class="username">
                  <a href="#">Admin</a>
                  <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                </span>
                <span class="description">Message - {{ $user['created_at']->format('F d Y h:i:s A (l)') }}</span>
              </div>
              <!-- /.user-block -->
              <p>
                Welcome {{$user->name}}! You are here to make great history.
              </p>

              <p>
                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                <span class="float-right">
                  <a href="#" class="link-black text-sm">
                    <i class="far fa-comments mr-1"></i> Comments (0)
                  </a>
                </span>
              </p>

              <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
            </div>
            <!-- /.post -->

            <!-- Post -->

            <!-- /.post -->

            <!-- Post -->

            <!-- /.post -->
          </div>
          <!-- /.tab-pane -->
          <!-- <div class="tab-pane" id="timeline"> -->
            <!-- The timeline -->
            <!-- <div class="timeline timeline-inverse"> -->
              <!-- timeline time label -->
              <!-- <div class="time-label">
                <span class="bg-danger">
                  10 Feb. 2014
                </span>
              </div> -->
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <!-- <div>
                <i class="fas fa-envelope bg-primary"></i>

                <div class="timeline-item">
                  <span class="time"><i class="far fa-clock"></i> 12:05</span>

                  <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                  <div class="timeline-body">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                    quora plaxo ideeli hulu weebly balihoo...
                  </div>
                  <div class="timeline-footer">
                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </div>
              </div> -->
              <!-- END timeline item -->
              <!-- timeline item -->
              <!-- <div>
                <i class="fas fa-user bg-info"></i>

                <div class="timeline-item">
                  <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                  <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                  </h3>
                </div>
              </div> -->
              <!-- END timeline item -->
              <!-- timeline item -->
              <!-- <div>
                <i class="fas fa-comments bg-warning"></i>

                <div class="timeline-item">
                  <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                  <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                  <div class="timeline-body">
                    Take me to your leader!
                    Switzerland is small and neutral!
                    We are more like Germany, ambitious and misunderstood!
                  </div>
                  <div class="timeline-footer">
                    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                  </div>
                </div>
              </div> -->
              <!-- END timeline item -->
              <!-- timeline time label -->
              <!-- <div class="time-label">
                <span class="bg-success">
                  3 Jan. 2014
                </span>
              </div> -->
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <!-- <div>
                <i class="fas fa-camera bg-purple"></i>

                <div class="timeline-item">
                  <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                  <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                  <div class="timeline-body">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                  </div>
                </div>
              </div> -->
              <!-- END timeline item -->
              <!-- <div>
                <i class="far fa-clock bg-gray"></i>
              </div>
            </div>
          </div> -->
          <!-- /.tab-pane -->

          <div class="tab-pane" id="information">
            <form class="form-horizontal">
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="name" class="form-control" id="name" value="{{ $user->name }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" value="{{ $user->email }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="age" value="{{ $user->age }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="number" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                  <input class="form-control" id="number" value="{{ $user->number }}"></input>
                </div>
              </div>
              <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="role" placeholder="{{ ucfirst(trans($user->role)) }}" readonly>
                </div>
              </div>

              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
@endsection
