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
              Create New Department
           </i>
      </h1>
  </div>
  <form class="form-horizontal" action="{{route('departments.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Code" class="col-sm-2 col-form-label">Code:</label>
              <div class="col-sm-4 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="type" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="code" value="{{old('code')}}" class="form-control" id="Name" placeholder="HRDAD" >
                      <span style="color: red; font-style: italic;">{{$errors -> first('code')}}</span>
                  </div>
              </div>
          </div>

          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for=" Code" class="col-sm-2 col-form-label">Name:</label>
              <div class="col-sm-9 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="text" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="name" value="{{old('name')}}" class="form-control" id="Name" placeholder="Human Resource & Admin Group" >
                        <span style="color: red; font-style: italic;">{{$errors -> first('name')}}</span>
                  </div>
              </div>
          </div>
        
        
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Name" class="col-sm-2 col-form-label">Descriptions:</label>
              <div class="col-sm-8">
                  <input style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  type="text" name="descriptions" class="form-control" id="Name" placeholder="Describe the Department">
                  <span style="color: red; font-style: italic;">{{$errors -> first('descriptions')}}</span>
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