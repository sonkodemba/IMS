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
              Edit Grade {{$payGrade -> name}}
           </i>
      </h1>
  </div>
  <form class="form-horizontal" action="{{route('pay-grades.update', $payGrade -> id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="card-body">
         
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for=" Code" class="col-sm-2 col-form-label">Name:</label>
              <div class="col-sm-7 input-group input-group-sm">
                  <div class="input-group-append">
                      <input placeholder="Enter Gender: EG: Male" type="text" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="name" class="form-control" id="Name" value="{{$payGrade -> name}}" >

                  </div>
              </div>
          </div>
        
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Name" class="col-sm-2 col-form-label">Descriptions:</label>
              <div class="col-sm-10">
                  <input placeholder="Enter Descriptions" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  type="text" name="descriptions" value="{{$payGrade -> descriptions}}" class="form-control" id="Name">
                  <span style="color: red; font-style: italic;">{{$errors -> first('descriptions')}}</span>
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
                      <i class="fa fa-save"> Update</i>
                  </button>
                  <a href="{{route('pay-grades.index')}}" class="btn btn-danger">
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
</div>
</div>
</div>

@endsection