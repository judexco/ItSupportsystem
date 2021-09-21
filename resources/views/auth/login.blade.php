<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">

   <!--  <title>Seaba College</title> -->
    <title>{{ site_name() }} - @yield('title')</title>

    <link rel="stylesheet" href="{{ load_asset('dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ load_asset('dist/css/skins/skin-blue.min.css') }}">
    <link rel="stylesheet" href="{{ load_asset('summernote/summernote.css') }}">



<!-- begin login header -->

  
 <!--  end login header -->




    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Brilliance Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('theme/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('theme/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="{{asset('theme/js/jquery-2.1.4.min.js')}}"></script>
    <!-- //js -->
    <!-- pop-up-box -->
    <link href="{{asset('theme/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up-box -->
    <!-- font-awesome icons -->
    <link href="{{asset('theme/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>    

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>{{ site_name() }} PORTAL</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

         <form role="form" method="POST" action="{{ route('auth.login') }}" _lpchecked="1">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
            <input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                            
                  <div class="row">
                    <div class="col-xs-8">
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox"> Remember Me
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                      <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                  </div>
                  
                    <!-- <div class="social-auth-links text-center">
                      <p>- OR -</p>
                        <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                        <a href="{{ url('/auth/twitter') }}" class="btn btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                        <a href="{{ url('/auth/google') }}" class="btn btn-block btn-social btn-google"><i class="fa fa-google-plus"></i>Sign in with Google</a>
                        <a href="{{ url('/auth/github') }}" class="btn btn-block btn-social btn-github"><i class="fa fa-github"></i>Sign in with GitHub</a>                        
                    </div> -->
                    <!-- /.social-auth-links -->

                    </form>                
                
                    <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
                    <a href="{{ url('/signup') }}">Sign up for a new account</a><br>
                    <a href="{{ url('/') }}">Return home</a><br>
                  
                   </div>
                  <!-- /.login-box-body -->
                </div>
                <!-- /.login-box -->
                
                <!-- jQuery 2.2.3 -->
                <script src="{{ load_asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
                <!-- Bootstrap 3.3.6 -->
                <script src="{{ load_asset('bootstrap/js/bootstrap.min.js') }}"></script>
                <!-- iCheck -->
                <script src="{{ load_asset('plugins/iCheck/icheck.min.js') }}"></script>
                <script>
                  $(function () {
                    $('input').iCheck({
                      checkboxClass: 'icheckbox_square-blue',
                      radioClass: 'iradio_square-blue',
                      increaseArea: '20%' // optional
                    });
                  });
                </script>
                </body>
                </html> 

