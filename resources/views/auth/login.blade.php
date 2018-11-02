@extends ('Backend.layout.login')

@section('content')
<div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
  <form class="form" method="" action="">
    <div class="card card-login card-hidden">
      <div class="card-header card-header-rose text-center">
        <h4 class="card-title">Inicie Sesión</h4>
      </div>
      <div class="card-body ">

        <a href="../dashboard.html" class="nav-link">
            <i class="material-icons">person_add</i>
            O Regístrese
        </a>
        <hr class="bg-primary">
        <span class="bmd-form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text text-white">
                <i class="material-icons">email</i>
              </span>
            </div>
            <input type="email" class="form-control" placeholder="Correo Electrónico...">
          </div>
        </span>
        <span class="bmd-form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text text-white">
                <i class="material-icons">lock_outline</i>
              </span>
            </div>
            <input type="password" class="form-control" placeholder="Contraseña...">
          </div>
        </span>
      </div>
      <div class="card-footer justify-content-center">
        <a href="#pablo" class="btn btn-rose btn-link btn-lg">Iniciar</a>
      </div>
    </div>
  </form>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
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
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
