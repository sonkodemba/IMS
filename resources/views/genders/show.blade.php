@extends('layouts.admin')
@section('content');


 <div class="jumbotron" style="padding-top: 10px; padding-left: 120px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 >
                            <strong class="badge btn-outline-success float-left">
                            <i class="fa fa-home"> 
                                @if ($gender -> name == 'M')
                                    {{-- expr --}}
                                    List of Male Users

                                @else
                                    List of Female Users
                                @endif
                            </i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('genders.create')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">

    @if(count($gender -> users) < 1)
      <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('genders.index') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No EMPLOYEE / USER DATA Registered for {{$gender -> name}}.
                     Click on the Button to create GENDER.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                   
                </div>
 	 @else
    <table class="table table-hover">
        <thead>
        <tr>
        	<th>#</th>
            <th>Name</th>
            <th>Staff ID</th>
            <th>SSN</th>
            <th>Department</th>
            <th>Designations</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($gender -> users as $gender)
        <tbody>
                	<tr>
                		<td></td>
                		<td>
                			<a href="{{ route('users.show', $gender -> id) }}">
                				{{$gender -> name}}
                			</a>
                		</td>
                		<td>{{$gender -> staff_id}}</td>
                		<td>{{$gender -> social_security_num}}</td>
                        <td>{{$gender -> department -> name}}</td>
                        <td>{{$gender -> designation -> name}}</td>
                		<td>
                			<a class="btn btn-success" href="{{ route('users.show', $gender -> id) }}">
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