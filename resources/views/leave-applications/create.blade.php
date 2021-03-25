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
              Create Leave
           </i>
      </h1>
  </div>
  <form class="form-horizontal" action="{{route('leave-applications.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Code" class="col-sm-2 col-form-label">Staff ID:</label>
              <div class="col-sm-4 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="number"  value="{{old('staff_id')}}" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="staff_id" class="form-control" id="Name" placeholder="" >
                      <span style="color: red; font-style: italic;">{{$errors -> first('staff_id')}}</span>
                  </div>
              </div>
          </div>
        <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF " for="Location" class="col-sm-2 col-form-label">Leave Category:</label>
              <div class="col-sm-5">
                  <select name="leave_category_id" value={{old('leave_category_id')}} id="leave_category_id" class="form-control select2" style="background-color: lightyellow; font-size: 20px; font-family: sans-serif bold; color: red; font-weight: bolder;">
                    <option selected="selected">-- Select Location --</option>
                     @foreach ($leaveCategoryProvider as $leave)                                       
                        <option value="{{ $leave->id }}">{{ $leave->name }}</option>                                                      
                    @endforeach
                  
                  </select>
              </div>

          </div>
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Code" class="col-sm-2 col-form-label">Start Date:</label>
              <div class="col-sm-7 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="date"  value="{{old('start_date')}}" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="start_date" class="form-control" id="Name" placeholder="LKS" >
                      <span style="color: red; font-style: italic;">{{$errors -> first('code')}}</span>
                  </div>
              </div>
          </div>

          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for=" Code" class="col-sm-2 col-form-label">End Date:</label>
              <div class="col-sm-7 input-group input-group-sm">
                  <div class="input-group-append">
                      <input type="date" value="{{old('end_date')}}" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="end_date" class="form-control" id="Name" placeholder="Latrikunda Sabiji">
                      <span style="color: red; font-style: italic;">{{$errors -> first('end_date')}}</span>
                  </div>
              </div>
          </div>
          <div class="form-group row">
              <label style="text-align: right; color: #0E0EFF" for="Name" class="col-sm-2 col-form-label">Descriptions:</label>
              <div class="col-sm-8">
                  <input style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: normal;"  type="text" name="descriptions" class="form-control" id="Name" placeholder="Give Reason(s)">
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
                      <i class="fa fa-save"> Create</i>
                  </button>
                  <a href="{{route('leave-applications.index')}}" class="btn btn-warning">
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