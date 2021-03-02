 @extends('layouts.admin')

@section('content')
    <div class="jumbotron" style="padding-top: 30px; padding-left: 120px">
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('User Registration') }}</h1>

                    </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                          <div class="card-body">
                              <div class="form-group row">
                                  <label style="text-align: right; color: #0E0EFF" for="Code" class="col-sm-2 col-form-label">Staff ID:</label>
                                  <div class="col-sm-7 input-group input-group-sm">
                                      <div class="input-group-append">
                                          <input placeholder="11563" type="number" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="code" class="form-control" id="Name" >
                                      </div>
                                  </div>
                              </div>

                          <div class="form-group row">
                              <label style="text-align: right; color: #0E0EFF" for=" Code" class="col-sm-2 col-form-label">Name:</label>
                              <div class="col-sm-7 input-group input-group-sm">
                                  <div class="input-group-append">
                                      <input placeholder="Demba Sonko" type="text" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="name" class="form-control" id="Name" >

                                  </div>
                              </div>
                          </div>
        
                          <div class="form-group row">
                              <label style="text-align: right; color: #0E0EFF " for="Location" class="col-sm-2 col-form-label">User Group:</label>
                              <div class="col-sm-6">
                                  <select name="location" id="location_id" class="form-control select2" style="background-color: lightyellow; font-size: 20px; font-family: sans-serif bold; color: red; font-weight: bolder;">
                                    <option selected="selected">-- Select Location --</option>
                                    <option>Alaska</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                  </select>
                              </div>

                  </div>
                        
                          <div class="form-group row">
                              <label style="text-align: right; color: #0E0EFF" for=" email" class="col-sm-2 col-form-label">Email:</label>
                              <div class="col-sm-7 input-group input-group-sm">
                                  <div class="input-group-append">
                                      <input placeholder="dsonko@nanotech.group" type="text" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="name" class="form-control" id="Name" >

                                  </div>
                              </div>
                          </div>
                        
                          <div class="form-group row">
                              <label style="text-align: right; color: #0E0EFF" for=" Password" class="col-sm-2 col-form-label">Password:</label>
                              <div class="col-sm-7 input-group input-group-sm">
                                  <div class="input-group-append">
                                      <input placeholder="Enter password" type="password" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="name" class="form-control" id="Name" >

                                  </div>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label style="text-align: right; color: #0E0EFF" for=" comfirm_password" class="col-sm-2 col-form-label">Conform Password:</label>
                              <div class="col-sm-7 input-group input-group-sm">
                                  <div class="input-group-append">
                                      <input placeholder="Confirm your password" type="password" style="background-color: lightyellow; font-size: 24px; font-family: sans-serif bold; color: red; font-weight: bolder;"  name="name" class="form-control" id="Name" >

                                  </div>
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
                  <a href="{{route('locations.index')}}" class="btn btn-warning">
                      <i class="fa fa-credit-card"></i>
                      Cancel.
                  </a>
              </div>
              <!-- /.card-footer -->
          </div>
      </div>
</form>
                </div>
            </div>
       </div>
   </div>
</div>
 
{{-- @extends('layouts.admin')
@section('content')
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="../../index.html" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <a href="login.html" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
 --}}
 @endsection
