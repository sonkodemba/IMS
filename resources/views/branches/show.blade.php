@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 10px; padding-left: 120px">

@if (count($branch -> employees) > 0)
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title">
                	<i class="fa fa-user"> </i>
                	{{-- <strong class="float-left"> --}}
                		List of Employee in {{$branch -> name}} Branch 
                	{{-- </strong> --}}
                		

                </h1>
                <a class="btn btn-warning float-lg-right" href="{{route('branches.index')}}"><i class="fa fa-backward"></i> Back</a>
              </div>
              <!-- /.card-header -->
          
              <div class="card-body">
                	<table id="example2" class="table table-hover">
                  <thead>
                  <tr>
                    <th>Staff ID</th>
                    <th>Name</th>
                    <th>SSN</th>
                    <th>Department</th>
                    <th>Designation</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($branch -> employees as $branchEmployee)
                  	<tr>
                    <td>
                     <a href="{{ route('employees.show', $branchEmployee -> id ) }}">
                      {{$branchEmployee -> staff_id}}
                    </a>
                    </td>
                    <td>
                      <a href="{{ route('employees.show', $branchEmployee -> id) }}">
                        {{$branchEmployee -> name}}
                      </a>
                      </td>
                    <td>{{$branchEmployee -> social_security_num}}</td>
                    <td> {{$branchEmployee -> department -> name}}</td>
                    <td>{{$branchEmployee -> designation -> name}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>

                </div>
               
              <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
</section>
 </div>
	@else
        <h1 class="badge badge-danger">
        	<strong>
        		There is No Data for {{$branch -> name}} Branch
        	</strong>
        	
        </h1>
 		<a class="btn btn-success float-md-right" href="{{route('branches.index')}}"><i class="fa fa-backward"></i></a>
@endif
	

@endsection