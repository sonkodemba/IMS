@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px; padding-left: 10px">
    @if(count($user_groups) < 1)
              <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('user-groups.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No Branch DATA Registered.
                     Click on the Button to create USER GROUPS.</strong>
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
                            <i class="fa fa-home"> User Groups</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('user-groups.create')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">
    <table class="table table-hover">
        <thead>

        <tr>
          <th></th>
            <th >Name</th>
            <th>#.Staff</th>
            <th >Descriptions</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($user_groups as $group)
        <tbody>                    

                <tr>
                  <td></td>
                    <td>
                      @if (count($group -> users) < 1)
                         <p style="color: red">{{$group -> name}}</p>
                      @else 
                       <a href="{{ route('user-groups.show', $group -> id) }}">
                         {{$group -> name}}
                       </a>
                      @endif
                    </td>
                    <td>
                      @if (count($group -> users) > 0)
                        <span class="badge badge-success">{{count($group -> users)}}</span>
                        @else 
                        <span class="badge badge-danger">{{count($group -> users)}}</span>
                      @endif
                    </td>
                    <td>{{$group -> descriptions}}</td>
                    <td>
                      <a href="#" class="btn btn-success">
                        <i class="fa fa-pencil-alt"></i>
                      </a>
                      <a href="" class="btn btn-danger">
                        <i class="fa fa-trash-alt"></i>
                      </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
              {{ $user_groups->onEachSide(5)->links() }}
    @endif
    </div>
        </div>
    </div>
        </div>
    </div>
    @endsection
