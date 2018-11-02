@extends ('Backend.layout.layout')

@section('content')


<div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Crear Usuario</h4>
                  <p class="card-category">Complete todos los datos</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                          <label class="bmd-label-floating ">Usuario</label>
                          <input id="name" name="name" class="form-control" type="text" value="{{ old('name') }}" required autofocus>
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                          <label class="bmd-label-floating">Correo Electrónico</label>
                          <input id="email" name="email"  class="form-control" type="email" value="{{ old('email') }}" required>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                          <label class="bmd-label-floating">Contraseña</label>
                          <input id="password" name="password" class="form-control" type="password" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group ">
                          <label class="bmd-label-floating">Confirmar Contraseña</label>
                          <input id="password-confirm" name="password_confirmation" class="form-control" type="password" required>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary pull-right" type="submit">Crear Usuario</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

@endsection
