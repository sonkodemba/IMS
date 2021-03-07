@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px; padding-left: 10px">
    
    @if(count($leave_applications) < 1)
    <div style="padding-top: 50px" class="alert alert-warning alert-dismissible fade show" role="alert">
      <h2 class="alert-heading">
        WARNING..!!
        <a class="btn btn-success float-md-right" href="{{ route('register') }}">
            <i class="fa fa-plus"> New </i>
        </a>
      </h2>
      <hr>
       <strong>There is No User Registered in This Platform.
         Click on the Button to create New user.</strong>
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
                            <i class="fa fa-home">List of Leave Applicants</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('register')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">


    <table class="table table-hover">
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Descriptions</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($leave_applications as $leaveApplication)
<tbody>
        <tr>
        	<td></td>
        	<td>{{$leaveApplication -> name}}</td>
        	<td>{{$leaveApplication -> descriptions}}</td>
            
        </tr>
        @endforeach
</tbody>
    </table>
              {{ $users->onEachSide(5)->links() }}
    @endif
    </div>
        </div>
    </div>
        </div>
    </div>
    @endsection
