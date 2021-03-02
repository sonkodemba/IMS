@extends('layouts.admin')
@section('content');


 <div class="jumbotron" style="padding-top: 10px; padding-left: 120px">
 	@if(count($payGrade -> users) < 1)
      <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('pay-grades.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No USER UNDER {{$payGrade -> name}} GRADE DATA Registered.
                     Click on the Button to create.</strong>
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
                            <i class="fa fa-home"> List of Users On GRADE {{$payGrade -> name}}</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('pay-grades.index')}}"><i class="fa fa-backward"></i></a>
                        </h3>
                    </div>

      <div class="card-body">

    
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Staff ID</th>
            <th>SSN</th>
            <th>Department</th>
            <th>Designation</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($payGrade -> users as $grade)
        <tbody>
        	<tr>
        		<td>
        			<a href="{{ route('users.show', $grade -> id) }}">
        				{{$grade -> name}}
        			</a>
        		</td>
                <td>{{$grade -> gender -> name}}</td>
                <td>{{$grade -> staff_id}}</td>
                <td> {{$grade -> social_security_num}}</td>
                <td>{{$grade -> department-> name}}</td>
                <td> {{$grade -> designation -> name}}</td>
              <td>
        			<a class="btn btn-success" href="{{ route('users.show', $grade -> id) }}">
        				<i class="fa fa-pencil-alt"></i>
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