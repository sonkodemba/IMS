@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px; padding-left: 10px">
    @if(count($branches) < 1)
              <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('branches.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No Branch DATA Registered.
                     Click on the Button to create BRANCHES.</strong>
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
                            <i class="fa fa-home"> Branches</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('branches.create')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">
    <table class="table table-hover">
        <thead>

        <tr>
            <th >Name</th>
            <th>#.Staff</th>
            <th >Telephone No.</th>
             <th>Address</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($branches as $branch)
        <tbody>                    

                <tr>
                    <td>
                        <a href="{{ route('branches.show',$branch -> id) }}">
                            {{$branch -> name}}
                        </a>

                    </td>
                    <td>
                      @if (count($branch -> users) > 0)
                        <span class="badge badge-success">{{count($branch -> users)}}</span>
                        @else 
                        <span class="badge badge-danger">{{count($branch -> users)}}</span>
                      @endif
                    </td>
                    <td>{{$branch-> mobile}}</td>
                    <td>{{$branch -> address}}</td>
                    <td>
                    	 <a  class="btn btn-success" href="{{route('branches.edit', $branch -> id)}}"><i class="fa fa-pencil-alt"></i></a>
                    <a  class="btn btn-danger" href="#"><i class="fa fa-trash-alt"></i></a>

                    </td>

                </tr>
                @endforeach
        </tbody>
    </table>
              {{-- {{$branches -> links()}} --}}
              {{ $branches->onEachSide(5)->links() }}
    @endif
    </div>
        </div>
    </div>
        </div>
    </div>
    @endsection
