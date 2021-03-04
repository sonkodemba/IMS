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
                            <i class="fa fa-home"> List of Designations / Title</i>
                            </strong>
                            <a class="btn btn-success float-md-right" href="{{route('designations.create')}}"><i class="fa fa-plus"></i></a>
                        </h3>
                    </div>

      <div class="card-body">

    @if(count($designations) < 1)
      <div style="padding-top: 20px" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <h2 class="alert-heading">
                    WARNING..!!
                    <a class="btn btn-success float-md-right" href="{{ route('branches.create') }}">
                        <i class="fa fa-plus"> New </i>
                    </a>
                  </h2>
                  <hr>
                   <strong>There is No DESIGNATION/TITLE DATA Registered.
                     Click on the Button to create TITLE.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                   
                </div>
 	 @else
<table class="table table-hover">
<thead>
<tr>
    <th >Name</th>
    <th>No.Of Users</th>
    <th>On-Leave</th>
     <th>Descriptions</th>
     <th>Action</th>
</tr>

</thead>
@foreach($designations as $designation)
<tbody>
<tr>

	<td>
		<a href="{{ route('designations.show', $designation -> id) }}">
			{{$designation -> name}}
		</a>
	</td>
    <td>
        <span class="badge badge-success">
            {{count($designation -> users)}}
        </span>
    </td>
    <td>
        @if (count($designation -> leaves) < count($designation -> leaves) / 2)
            <span class="badge badge-success"> {{count($designation -> leaves)}}</span>
        @elseif(count($designation -> leaves) == count($designation -> leaves) / 2)
          <span>{{count($designation -> leaves)}}</span>

        @else
           <span class="badge badge-danger">{{count($designation -> leaves)}}</span>
        @endif
    </td>
	<td>{{$designation -> descriptions}}</td>
	<td>
		<a class="btn btn-success" href="{{ route('designations.edit', $designation -> id) }}">
			<i class="fa fa-pencil-alt"></i>
		</a>
		<a class="btn btn-danger" href="{{ route('designations.destroy', $designation -> id) }}">
			<i class="fa fa-trash-alt">
				
			</i>
		</a>
	</td>
</tr>
</tbody>
    @endforeach
    </table>
		{{ $designations->onEachSide(5)->links() }}   
		 @endif
    </div>
        </div>
    </div>
        </div>
    </div>
@endsection