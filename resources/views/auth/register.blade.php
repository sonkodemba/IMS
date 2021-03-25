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
             New User
           </i>
      </h1>
  </div>
  <form class="form-horizontal" action="{{route('register')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Code" class="col-sm-2 col-form-label">Name:</label>
              <div class="col-sm-10 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="text" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="code" value="{{old('name')}}" class="form-control" id="Name" placeholder="HRDAD" >
                      <span style="color: red; font-style: italic;">{{$errors -> first('name')}}</span>
                  </div>
              </div>
          </div>
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Code" class="col-sm-2 col-form-label">Staff ID:</label>
              <div class="col-sm-4 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="number" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="code" value="{{old('staff_id')}}" class="form-control" id="Name" >
                      <span style="color: red; font-style: italic;">{{$errors -> first('staff_id')}}</span>
                  </div>
              </div>
          </div>
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Name" class="col-sm-2 col-form-label">SSN:</label>
              <div class="col-sm-4">
                  <input style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  type="text" name="social_security_num" class="form-control" id="Name" placeholder="Describe the Department">
                  <span style="color: red; font-style: italic;">{{$errors -> first('social_security_num')}}</span>
              </div>
          </div>

        <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF " for="Location" class="col-sm-2 col-form-label">Gender:</label>
              <div class="col-sm-3">
                  <select name="location_id" value={{old('location_id')}} id="location_id" class="form-control select2" style="background-color: lightyellow; font-size: 20px; font-family: sans-serif bold; color: red; font-weight: bolder;">
                    <option selected="selected">-- Select Gender --</option>
                     @foreach ($GenderProvider as $gender)                                       
                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>                                                      
                    @endforeach
                  
                  </select>
              </div>

          </div>
        <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF " for="Location" class="col-sm-2 col-form-label">Marital Status:</label>
              <div class="col-sm-3">
                  <select name="location_id" value={{old('location_id')}} id="location_id" class="form-control select2" style="background-color: lightyellow; font-size: 20px; font-family: sans-serif bold; color: red; font-weight: bolder;">
                    <option selected="selected">-- Select Marital Status --</option>
                     @foreach ($maritalStatusProvider as $marital_status)                                       
                        <option value="{{ $marital_status->id }}">{{ $marital_status->name }}</option>                                                      
                    @endforeach
                  
                  </select>
              </div>

          </div>
                

          <hr>
          <div class="card-footer">
              <small class="badge btn-outline-danger" style="font-style: italic;">
                verify the data before you save.
              </small>
              <span class="badge btn-outline-danger"></span>
              <div class="float-md-right">
                  <button  type="submit" class="btn btn-success">
                      <i class="fa fa-save"> Create</i>
                  </button>
                  <a href="{{route('departments.index')}}" class="btn btn-warning">
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