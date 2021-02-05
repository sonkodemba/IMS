@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px; padding-left: 120px">
    
    @if(count($users) < 1)
                <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
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
                            <i class="fa fa-home"> Users</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('register')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">


    <table class="table table-hover">
        <thead>
        <tr>
            <th >Staff ID</th>
            <th >Name</th>
            <th>Group</th>
            <th >Email</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($users as $user)
        <tbody>
                <tr>
                    <td>{{$user -> staff_id}}</td>
                    <td>
                        <a href="{{ route('users.show',$users -> id) }}">
                            {{$user -> name}}
                        </a>

                    </td>
                    <td>{{$user -> user_group_name}}</td>
                    <td>{{$user-> email}}</td>
                    <td>
                    	 <a  class="btn btn-outline-warning" href="{{route('user.edit', $user -> id)}}"><i class="fa fa-pencil-alt"></i></a>
                    <a  class="btn btn-outline-danger" href="#"><i class="fa fa-trash-alt"></i></a>

                    </td>

                </tr>
                @endforeach
        </tbody>
    </table>
              {{-- {{$branches -> links()}} --}}
              {{ $users->onEachSide(5)->links() }}
    @endif
    </div>
        </div>
    </div>
        </div>
    </div>
    @endsection
