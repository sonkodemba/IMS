@extends('layouts.admin')
@section('content');


 <div class="jumbotron" style="padding-top: 10px; padding-left: 120px">
 	@if(count($grades) < 1)
      <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('pay-grades.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No PAY GRADES DATA Registered.
                     Click on the Button to create DEPARTMENT.</strong>
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
                            <i class="fa fa-home"> List of Pay Grades</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('pay-grades.create')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">

    
    <table class="table table-hover">
        <thead>
        <tr>
            <th >Name</th>
            <th>No. Users</th>
            <th>Descriptions</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($grades as $grade)
        <tbody>
        	<tr>
        		<td>
        			<a href="{{ route('pay-grades.show', $grade -> id) }}">
        				{{$grade -> name}}
        			</a>
        		</td>
                <td>
                    @if (count($grade -> users) < 1)
                        <span class="badge badge-danger">{{count($grade -> users)}}</span>
                    @else
                       <span class="badge badge-succes">
                        {{count($grade -> users)}}
                    </span>
                    @endif
                </td>
        		<td>{{$grade -> descriptions}}</td>
              <td>
        			<a class="btn btn-success" href="{{ route('pay-grades.edit', $grade -> id) }}">
        				<i class="fa fa-pencil-alt"></i>
        			</a>
        			<a class="btn btn-danger" href="{{ route('pay-grades.destroy', $grade -> id) }}">
        				<i class="fa fa-trash-alt">
        					
        				</i>
        			</a>
        		</td>
        	</tr>
        </tbody>
        @endforeach
    </table>
            {{$grades -> onEachSide(5)->links()}}    
    @endif
    </div>
        </div>
    </div>
        </div>
    </div>
@endsection