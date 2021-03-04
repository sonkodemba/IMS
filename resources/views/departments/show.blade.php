@extends('layouts.admin')
@section('content');
 <div class="jumbotron" style="padding-top: 10px; padding-left: 20px">
    @if (count($department -> users)< 1)
        {{-- expr --}}
        <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('departments.index') }}">
                        <i class="fa fa-backward"> Back </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No User Under "{{$department -> name}}"  Registered.
                     Click on the Button to To Go back.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                   
                </div>
    @else
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 >
                            <strong class="badge btn-outline-success float-left">
                            <i class="fa fa-users">Users in "{{$department -> name}}"</i>
                            </strong>
                        </h3>
                        <a class="btn btn-success float-md-right" href="{{ route('departments.index') }}">
                        	<i class="fa fa-backward"> Back</i>
                        </a>
                    </div>

  <div class="card-body">
    <table class="table table-hover">
        <thead>

        <tr>
            <th >Name</th>
            <th>Gender</th>
            <th>Staff ID</th>
            <th>SSN No.</th>
            <th>Designation</th>
             <th>Action</th>
        </tr>
        </thead>
        <tbody>
        	@foreach ($department -> users as $departmentEmployee)        	
                	<tr>
                		<td>
                			<a href="{{ route('users.show', $departmentEmployee -> id) }}">
                				{{$departmentEmployee -> name}}
                			</a>
                		</td>
                        <td>
                            <a href="{{ route('genders.index') }}">
                                {{$departmentEmployee -> gender -> name}}
                            </a>
                        </td> 
                       
                        <td>{{$departmentEmployee -> staff_id}}</td>
                        <td>{{$departmentEmployee -> social_security_num}}</td>
                		<td>{{$departmentEmployee -> designation -> name}}</td>
                		<td>
                			<a class="btn btn-success" href="{{ route('users.show', $departmentEmployee -> id) }}">
                				<i class="fa fa-user-alt"></i>
                			</a>
                			
                		</td>
                	</tr>
                	@endforeach
        </tbody>
        
    </table>
             
    @endif
    </div>
        </div>
    </div>
        </div>
    </div>
@endsection