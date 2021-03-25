@extends('layouts.admin')
@section('content');


 <div class="jumbotron" style="padding-top: 10px; padding-left: 10px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 >
                            <strong class="badge btn-outline-success float-left">
                            <i class="fa fa-home"> List of Gender</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('genders.create')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">

    @if(count($genders) < 1)
      <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('genders.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No GENDER DATA Registered.
                     Click on the Button to create GENDER.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                   
                </div>
 	 @else
    <table class="table table-hover">
        <thead>
        <tr>
        	<th></th>
            <th>Name</th>
            <th>Users</th>
            <th>Leave</th>
            <th>Descriptions</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($genders as $gender)
        <tbody>
    	<tr>
    		<td></td>
    		<td>
    			<a href="{{ route('genders.show', $gender -> id) }}">
    				{{$gender -> name}}
    			</a>
    		</td>
    		<td>
                @if (count($gender -> users) > 0)
                          <span class="badge badge-success">{{count($gender -> users)}}</span>
                  @else 
                  <span class="badge badge-danger">{{count($gender -> users)}}</span>
                      @endif      
            </td>
            <td>
                @if (count($gender -> leaves) < 1)
                     <span class="badge badge-danger">{{count($gender -> leaves)}}</span>
                @else 
                    <span class="badge badge-succes">{{count($gender -> leaves)}}</span>
                @endif
            </td>
    		<td>{{$gender -> descriptions}}</td>
    		<td>
    			<a class="btn btn-success" href="{{ route('genders.edit', $gender -> id) }}">
    				<i class="fa fa-pencil-alt"></i>
    			</a>
    			
                    <a class="btn btn-danger" href="{{ route('genders.index') }}" 
                       onclick="event.preventDefault();
                        document.getElementById(
                          'delete-fromGender-{{$gender->id}}').submit();">
                        <i class="fa fa-trash">
                            
                        </i> 
                    
                    </a>
                    <form id="delete-fromGender-{{$gender -> id}}" action="{{ route('genders.destroy', $gender -> id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
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