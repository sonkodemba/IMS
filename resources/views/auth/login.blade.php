<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>.::NanoTech| Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{assert('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        {{-- <a href="../../index2.html"><b>Welcome</b></a> --}}
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <hr>

            <form action="../../index3.html" method="post">
                <div class="input-group mb-3">
                    <input  style="background-color: lightyellow; font-weight: 100;" type="email" class="form-control" placeholder="dsonko@nanotech.com">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input style="background-color: lightyellow; font-weight: 100;" type="password" class="form-control" placeholder="Enter Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-footer">
              <span class="badge btn-outline-danger"></span>
              <div class="float-md-right">
                  <button  type="submit" class="btn btn-success">
                      <i class="fa fa-credit-card"> Sign In</i>
                  </button>
                  <a href="{{route('users.index')}}" class="btn btn-warning">
                      <i class="fa fa-trash-alt"></i>
                      Cancel.
                  </a>
              </div>
              <!-- /.card-footer -->
          </div>
            </form>
  </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

</body>
</html>
