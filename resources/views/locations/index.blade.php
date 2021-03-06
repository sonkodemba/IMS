@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px; padding-left: 30px">
    @if(count($locations) < 1)
              <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('locations.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No location DATA Registered.
                     Click on the Button to create LOCATION.</strong>
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
                            <i class="fa fa-home"> List of Locations</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('locations.create')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">
    <table class="table table-hover">
        <thead>

        <tr>
            <th></th>
            <th>Name</th>
            <th>No. Branch</th>
            <th>No. Staff</th>
            <th>Descriptions</th>

              <th>Action</th>
        </tr>

        </thead>
        @foreach($locations as $location)
        <tbody>                   

                <tr>
                    <td></td>
                     <td>
                        <a href="{{ route('locations.show',$location -> id) }}">
                            {{$location -> name}}
                        </a>
                    </td>
                    <td >
                        @if (count($location -> branches) > 0)
                        <span class="badge badge-success">{{count($location -> branches)}}</span>
                            {{-- expr --}}
                            @else 
                            <span class="badge badge-danger">{{count($location -> branches)}}</span>
                        @endif
                    </td>
                    <td>
                        @if (count($location -> users) > 0)
                           <span class="badge badge-success">{{count($location -> users)}}</span>
                           @else 
                           <span class="badge badge-danger">{{count($location -> users)}}</span>
                        @endif
                     </td>
                     {{-- <td>{{count($location -> leaves)}}</td> --}}
                    <td>{{$location-> descriptions}}</td>
                    <td>
                    	 <a  class="btn btn-success" href="{{route('locations.edit', $location -> id)}}"><i class="fa fa-pencil-alt"></i></a>
                    <a  class="btn btn-danger" href="#"><i class="fa fa-trash-alt"></i></a>

                    </td>

                </tr>
                @endforeach
        </tbody>
    </table>
              {{ $locations->onEachSide(5)->links() }}
    @endif
    </div>
        </div>
    </div>
        </div>
    </div>
    @endsection
