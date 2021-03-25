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
              <div class="col-sm-5">
                  <select name="location_id" value={{old('location_id')}} id="location_id" class="form-control select2" style="background-color: lightyellow; font-size: 20px; font-family: sans-serif bold; color: red; font-weight: bolder;">
                    <option selected="selected">-- Select Location --</option>
                     @foreach ($userGroupProvider as $usergroup)                                       
                        <option value="{{ $usergroup->id }}">{{ $usergroup->name }}</option>                                                      
                    @endforeach
                  
                  </select>
              </div>

          </div>
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Code" class="col-sm-2 col-form-label">Code:</label>
              <div class="col-sm-7 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="type"  value="{{old('code')}}" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="code" class="form-control" id="Name" placeholder="LKS" >
                      <span style="color: red; font-style: italic;">{{$errors -> first('code')}}</span>
                  </div>
              </div>
          </div>

          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for=" Code" class="col-sm-2 col-form-label">Name:</label>
              <div class="col-sm-7 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="text" value="{{old('branch_name')}}" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="name" class="form-control" id="Name" placeholder="Latrikunda Sabiji">
                      <span style="color: red; font-style: italic;">{{$errors -> first('name')}}</span>
                  </div>
              </div>
          </div>
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for=" Code" class="col-sm-2 col-form-label">Mobile No:</label>
              <div class="col-sm-7 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="number" value="{{old('mobile_num')}}" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="mobile" class="form-control" id="Name" placeholder="9976650" >
                      <span style="color: red; font-style: italic;">{{$errors -> first('num')}}</span>
                  </div>
              </div>
          </div>
        
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Name" class="col-sm-2 col-form-label">Address:</label>
              <div class="col-sm-7">
                   <input type="text" value="{{old('address')}}" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="address" class="form-control" id="Name" placeholder="Kaw Junction Torward Nema" >
                  <span style="color: red; font-style: italic;">{{$errors -> first('address')}}</span>
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
                      <i class="fa fa-save"> Create</i>
                  </button>
                  <a href="{{route('branches.index')}}" class="btn btn-warning">
                      <i class="fa fa-cancel"></i>
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