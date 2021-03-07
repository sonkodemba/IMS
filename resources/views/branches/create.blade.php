@extends('layouts.admin')
@section('content')
<div class="jumbotron" style="padding-top: 20px;">
<div class="container">
  <div class="row justify-content-center">
<div class="col-md-9">
<div class="card">
  <div class="card-header">
      <h1>
          <i style="background-color: white; font-size: 24px; font-family: sans-serif bold; color: black; font-weight: bolder;">
              Create New Branch
           </i>
      </h1>
  </div>
  <form class="form-horizontal" action="{{route('branches.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF " for="Location" class="col-sm-2 col-form-label">Location:</label>
              <div class="col-sm-6">
                  <select name="location" id="location_id" class="form-control select2" style="background-color: lightyellow; font-size: 20px; font-family: sans-serif bold; color: red; font-weight: bolder;">
                    <option selected="selected">-- Select Location --</option>
                     @foreach ($locationProvider as $location)                                       
                        <option value="{{ $location->id }}">{{ $location->name }}</option>                                                      
                    @endforeach
                  
                  </select>
              </div>

          </div>
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Code" class="col-sm-2 col-form-label">Code:</label>
              <div class="col-sm-7 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="type" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="code" class="form-control" id="Name" >
                  </div>
              </div>
          </div>

          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for=" Code" class="col-sm-2 col-form-label">Name:</label>
              <div class="col-sm-7 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="text" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="branch_name" class="form-control" id="Name" >

                  </div>
              </div>
          </div>
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for=" Code" class="col-sm-2 col-form-label">Mobile No:</label>
              <div class="col-sm-7 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="numbers" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="mpbile_num" class="form-control" id="Name" >

                  </div>
              </div>
          </div>
        
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Name" class="col-sm-2 col-form-label">Address:</label>
              <div class="col-sm-7">
                   <input type="text" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="address" class="form-control" id="Name" >

              </div>
          </div>

          <hr>
          <div class="card-footer">
              <small class="badge btn-outline-danger">
                verify the data before you save.
              </small>
              <span class="badge btn-outline-danger"></span>
              <div class="float-md-right">
                  <button  type="submit" class="btn btn-success">
                      <i class="fa fa-credit-card"> Create</i>
                  </button>
                  <a href="{{route('branches.index')}}" class="btn btn-warning">
                      <i class="fa fa-credit-card"></i>
                      Cancel.
                  </a>
              </div>
              <!-- /.card-footer -->
          </div>
      </div>
  </form>
          </div>
          <div>
          </div>

      </div>

  <!-- /.card -->
  </div>
</div>
</div>

@endsection