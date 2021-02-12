@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 3px; padding-left: 120px">
<div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
          --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @include('sweetalert::alert')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{count(App\Models\User::all())}}</h3>
                <p>Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{count(App\Models\Branch::all())}}<sup style="font-size: 20px"></sup></h3>

                <p>Branches</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{count(App\Models\Department::all())}}</h3>

                <p>Department</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('departments.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{count(App\Models\Designation::all())}}</h3>

                <p>Designations / Titles</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('designations.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
           
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">

                  Users
                </h1>

                <div class="card-tools">
                
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(count(App\Models\User::all()) > 0)
                <table id="example2" class="table  table-hover">
                  <thead>
                     
                  <tr>
                    <th>Staff ID</th>
                    <th>SSN</th>
                    <th>UserName</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Status</th>
                    <th class="float-right">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach(App\Models\User::all() as $employee)
                   <tr>
                       <td>{{$employee -> staff_id}}</td>
                       <td>{{$employee -> social_security_num}}</td>
                      <td>
                        <a href="{{ route('users.show', $employee -> id) }}">
                          {{$employee -> name}}
                        </a>

                      </td>
                      <td>{{$employee -> department -> name}}</td>
                      <td>{{$employee -> designation -> name}}</td>
                      <td>
                        @if (Auth::user())

                          <p>D</p>

                          @else
                          <p>T</p>
                        @endif

                      </td>
                      <td>
                        <a  class="btn btn-outline-danger float-left" href="{{route('users.show', $employee -> id)}}"><i class="fa fa-pencil-alt"></i></a>
                  
                      </td>
                   </tr>
                                                                     
                  @endforeach
                  </tbody>
                 
               
                </table>
                @else
                <p>There is no Data</p>
                @endif
              </div>
              
            </div>
            <!-- /.card -->
           
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@endsection
