@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 10px; padding-left: 120px">

@if (count($location -> users) > 0)
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">
                   List of Employee in "{{$location -> name}}"                	

                </h1>
                <a class="btn btn-warning float-lg-right" href="{{route('locations.index')}}"><i class="fa fa-backward"></i> Back</a>
              </div>
              <!-- /.card-header -->
          
              <div class="card-body">
                	<table id="example2" class="table table-hover">
                  <thead>
                  <tr>
                    <th>Employee</th>
                    <th>Gender</th>
                    <th>Staff ID</th>
                    {{-- <th>Branch #</th> --}}
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($location -> users as $locationEmployee)
                  	<tr>
                    <td>
                     <a href="{{ route('employees.show', $locationEmployee -> id ) }}">
                      {{$locationEmployee -> name}}
                    </a>
                    </td>
                    <td>{{$locationEmployee -> gender -> name}}</td>
                    <td>
                      <a href="{{ route('employees.show', $locationEmployee -> id) }}">
                        {{$locationEmployee -> staff_id}}
                      </a>
                      </td>
                     <td>{{$locationEmployee -> department -> name}}</td>
                    <td> {{$locationEmployee -> designation -> name}}</td>
                    <td>
                      
                      <a href="{{ route('employees.show', $locationEmployee -> id) }}" class="btn btn-outline-success">
                        <i class="fa fa-pencil-alt"></i>
                      </a>
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
</div>
</section>
 </div>
	@else
        <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('locations.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <h3>There is No DATA for "{{$location -> name}}" Registered.
                     Click on the Button to create LOCATION.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                   
                </div>
@endif
@endsection