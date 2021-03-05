@extends('layouts.admin')
@section('content');


 <div class="jumbotron" style="padding-top: 10px; padding-left: 20px">
 	@if(count($leave_applications) < 1)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 >
                            <strong class="badge btn-outline-success float-left">
                            <i class="fa fa-home"> List of Leave</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('branches.create')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">

      <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('branches.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No leave_application DATA Registered.
                     Click on the Button to create leave_application.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                   
                </div>
@else 
    <table class="table table-hover">
        <thead>
        <tr>
        
            <th >Name</th>
            <th>No. of Employees</th>
            <th>On Leave</th>
            <th>Descriptions</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($leave_applications as $leave_application)
        <tbody>
        	<tr>
        	
        		<td>
        			<a href="{{ route('leave-applications.show', $leave_application -> id) }}">
        				{{$leave_application -> name}}
        			</a>
        		</td>
                <td>
                    @if (count($leave_application -> users) > 0)
                        <span class="badge badge-success">
                            {{count($leave_application -> users)}}
                        </span>
                    @else 
                      <span class="badge badge-danger">{{count($leave_application -> users)}}</span>
                    @endif
                </td>
                <td>
                    @if (count($leave_application -> leaves) < 1)
                       <span class=" badge badge-primary">{{count($leave_application -> leaves)}}</span>
                        {{-- expr --}}
                        @elseif(count($leave_application -> leaves) == count($leave_application -> leaves) / 2)
                        <span class="badge badge-warning">{{count($leave_application -> leaves)}}</span>
                        @else 
                        <span class="badge badge-success">{{count($leave_application -> leaves)}}</span>
                    @endif
                </td>
        		<td>{{$leave_application -> descriptions}}</td>
        		<td>
        			<a class="btn btn-success" href="{{ route('leave_applications.edit', $leave_application -> id) }}">
        				<i class="fa fa-pencil-alt"></i>
        			</a>
        			<a class="btn btn-danger" href="{{ route('leave_applications.destroy', $leave_application -> id) }}">
        				<i class="fa fa-trash-alt">
        					
        				</i>
        			</a>
        		</td>
        	</tr>
        </tbody>
        @endforeach
    </table>
           {{$leave_applications -> onEachSide(5)->links()}}  
    @endif
    </div>
        </div>
    </div>
        </div>
    </div>
@endsection