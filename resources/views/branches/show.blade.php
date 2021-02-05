@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 10px; padding-left: 120px">

@if (count($branch -> users) > 0)
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">
                	<i class="fa fa-user"> 
                      List of Employee in {{$branch -> name}} Branch 
                  </i>
                	

                </h1>
                <a class="btn btn-warning float-lg-right" href="{{route('branches.index')}}"><i class="fa fa-backward"></i> Back</a>
              </div>
              <!-- /.card-header -->
          
              <div class="card-body">
                	<table id="example2" class="table table-hover">
                  <thead>
                  <tr>
                    <th>Staff ID</th>
                    <th>Name</th>
                    <th>SSN</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($branch -> users as $branchUsers)
                  	<tr>
                    <td>
                     <a href="{{ route('users.show', $branchUsers -> id ) }}">
                      {{$branchUsers -> staff_id}}
                    </a>
                    </td>
                    <td>
                      <a href="{{ route('users.show', $branchUsers -> id) }}">
                        {{$branchUsers -> name}}
                      </a>
                      </td>
                    <td>{{$branchUsers -> social_security_num}}</td>
                    <td> 
                        <a href="{{ route('departments.show', $branchUsers -> id) }}">
                          {{$branchUsers -> department -> name}}
                        </a>
                    </td>
                    <td>
                      <a href="{{ route('designations.show', $branchUsers -> id) }}">
                        {{$branchUsers -> designation -> name}}
                      </a>
                    </td>
                    <td>
                      <a class="btn btn-outline-success" href="{{ route('users.show',$branchUsers -> id) }}">
                        
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
                    <a class="btn btn-success float-md-right" href="{{ route('branches.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No User Registered Under "{{$branch-> name}}".
                     Click on the Button to create BRANCHES.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                   
                </div>
@endif
	

@endsection