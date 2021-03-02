@extends('layouts.admin')
@section('content')

@if (count($designation -> users) < 1)
	{{-- expr --}}

<div class="jumbotron" style="padding-top: 10px; padding-left: 120px">
    <div class="container">
	<div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('designations.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No DESIGNATION/TITLE DATA Registered.
                     Click on the Button to create TITLE.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          </div>
      </div>

                   
                </div>
@else
 <div class="jumbotron" style="padding-top: 10px; padding-left: 120px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 >
                            <strong class="badge btn-outline-success float-left">
                            <i class="fa fa-home"> Employees With "{{$designation -> name}}" Positions</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('designations.index')}}"><i class="fa fa-backward"></i> Back</a>
                        </h3>
                    </div>

      <div class="card-body">
    <table class="table table-hover">
        <thead>
        <tr>
            <th >Code</th>
            <th >Name</th>
            <th>Staff ID</th>
            <th>SSN</th>
            <th>Grade</th>
            <th>Gender</th>
            <th>Department</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($designation -> users as $designation)
        <tbody>
                	<tr>
                		<td>{{$designation -> designation -> code}}</td>
                		<td>
                			<a href="{{ route('users.show', $designation -> id) }}">
                				{{$designation -> name}}
                			</a>
                		</td>
                        <td>{{$designation -> staff_id}}</td>
                        <td>{{$designation -> social_security_num}}</td>
                		<td>{{$designation -> paygrade -> name}}</td>
                		<td>{{$designation -> gender -> name}}</td>
                		<td>{{$designation -> department -> name}}</td>
                		<td>
                			<a class="btn btn-danger" href="{{ route('users.show', $designation -> id) }}">
                				<i class="fa fa-user-alt"></i>
                			</a>
                			
                		</td>
                	</tr>
        </tbody>
        @endforeach
    </table>
		 @endif
    </div>
        </div>
    </div>
        </div>
    </div>
    @endsection