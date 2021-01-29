@extends('layouts.admin')
@section('content')
    <div class="jumbotron" style="padding-top: 10px; padding-left: 120px">
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

    @if(count($branches) < 1)
              <div class="badge badge-danger">Employee Listed, Click on "New" to Add</div>
          @else
    <table class="table table-hover">
        <thead>

        <tr>
            <th >Code</th>
            <th >Name</th>
            <th>Location</th>
            <th >Telephone No.</th>
             <th>Address</th>
             <th>Action</th>
        </tr>

        </thead>
        @foreach($branches as $branch)
        <tbody>
                <tr>
                    <td>{{$branch -> code}}</td>
                    <td>
                        <a href="{{ route('branches.show',$branch -> id) }}">
                            {{$branch -> name}}
                        </a>

                    </td>
                    <td>{{$branch -> location_id}}</td>
                    <td>{{$branch-> mobile}}</td>
                    <td>{{$branch -> address}}</td>
                    <td>
                    	 <a  class="btn btn-outline-warning" href="{{route('branches.edit', $branch -> id)}}"><i class="fa fa-pencil-alt"></i></a>
                    <a  class="btn btn-outline-danger" href="#"><i class="fa fa-trash-alt"></i></a>

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
