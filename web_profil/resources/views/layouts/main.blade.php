<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lab AJK</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">    

</head>
<body style="background-color: #f7f7f9;">
  <div id="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
      <a class="navbar-brand" href="/"><img src="{{ url('logo_hitam.png')}}" style="width: 80px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="nav navbar-nav">
          @guest
          <li class="nav-item "><a class="nav-link" href="/">Beranda</a></li>
          <li class="nav-item "><a class="nav-link" href="{{ url('matkul') }}">Mata Kuliah</a></li>
          <li class="nav-item " style="cursor: pointer;"><a class="nav-link" data-toggle="modal" data-target="#modalLogin">Login</a></li>
          @else
          <li class="nav-item "><a class="nav-link" href="{{ url('admin') }}">Admin</a></li>
          <li class="nav-item "><a class="nav-link" href="{{ url('inventaris') }}">Inventaris</a></li>
          <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          </li>
          @endguest
        </ul>
      </div>
    </nav>
    @yield('content')
  </div>
  <div class="modal" id="modalLogin">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Log In Admin</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body" align="center">
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Username</label>
              <div class="col-md-6">
                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                  <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                </div>
              </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer" align="center">
          <center>
            <button type="submit" class="btn btn-primary">Login</button>
          </center>
        </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ url('js/customComboBox.js') }}"></script>
</body>
</html>
