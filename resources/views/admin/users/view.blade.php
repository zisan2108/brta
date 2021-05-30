@extends('layouts.backend.app')

@section('title','User Info')

@push('css')

@endpush
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="col-md-4 float-left card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ ucfirst($user->nid_card['name']) }}</h3>

                <p class="text-muted text-center">{{ $user->nid_card['nid'] }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Date of Birth</b> <a class="float-right">{{ $user->nid_card['birth_date']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Birth Place</b> <a class="float-right">{{ $user->nid_card['birth_place']}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Blood Group</b> <a class="float-right">{{ $user->nid_card['blood_group']}}</a>
                  </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="col-md-7 float-right card card-primary">
              <div class="card-header">
                <h3 class="card-title">About {{ ucfirst($user->nid_card['name']) }}</h3>
                <h3 class="card-title">, Member Since {{date("F d, y",strtotime($user->created_at))}}
                  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Father</strong>

                <p class="text-muted">
                  {{ ucfirst($user->nid_card['father']) }}
                </p>

                <hr>
                <strong><i class="fas fa-book mr-1"></i> Mother</strong>

                <p class="text-muted">
                  {{ ucfirst($user->nid_card['mother']) }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted">{{ ucfirst($user->nid_card['address']) }}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Email</strong>

                <p class="text-muted">
                  {{ ($user->email) }}
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Contact</strong>

                <p class="text-muted">{{ $user->phone }}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>
@endsection
@push('js')

@endpush