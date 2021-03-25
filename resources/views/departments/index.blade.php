@extends('layouts.admin')
@section('content');


 <div class="jumbotron" style="padding-top: 10px; padding-left: 20px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 >
                            <strong class="badge btn-outline-success float-left">
                            <i class="fa fa-home"> List of Departments</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('departments.create')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">

    @if(count($departments) < 1)
      <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('branches.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No DEPARTMENT DATA Registered.
                     Click on the Button to create DEPARTMENT.</strong>
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
        @foreach($departments as $department)
        <tbody>
        	<tr>
        	
        		<td>
        			<a href="{{ route('departments.show', $department -> id) }}">
        				{{$department -> name}}
        			</a>
        		</td>
                <td>
                    @if (count($department -> users) > 0)
                        <span class="badge badge-success">
                            {{count($department -> users)}}
                        </span>
                    @else 
                      <span class="badge badge-danger">{{count($department -> users)}}</span>
                    @endif
                </td>
                <td>
                    @if (count($department -> leaves) < 1)
                       <span class=" badge badge-primary">{{count($department -> leaves)}}</span>
                        {{-- expr --}}
                        @elseif(count($department -> leaves) == count($department -> leaves) / 2)
                        <span class="badge badge-warning">{{count($department -> leaves)}}</span>
                        @else 
                        <span class="badge badge-success">{{count($department -> leaves)}}</span>
                    @endif
                </td>
        		<td>{{$department -> descriptions}}</td>
        		<td>
        			<a class="btn btn-success" href="{{ route('departments.edit', $department -> id) }}">
        				<i class="fa fa-pencil-alt"></i>
        			</a>
        			<a class="btn btn-danger" href="{{ route('departments.index') }}" 
                       onclick="event.preventDefault();
                        document.getElementById(
                          'delete-fromDepartment-{{$department->id}}').submit();">
                        <i class="fa fa-trash">
                            
                        </i> 
                </a>
        		
                    <form id="delete-fromDepartment-{{$department -> id}}" action="{{ route('departments.destroy', $department -> id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
        		</td>
        	</tr>
        </tbody>
        @endforeach
    </table>
           {{$departments -> onEachSide(5)->links()}}  
    @endif
    </div>
        </div>
    </div>
        </div>
    </div>
@endsection