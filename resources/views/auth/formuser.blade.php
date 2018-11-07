@extends ('Backend.layout.layout')

@section('content')


<div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Modificar Usuario</h4>
                  <p class="card-category">Complete todos los datos</p>
                </div>
                <div class="card-body">
                  <form action="{{ route('actualizarusuario',['id'=>$usuario->id])}}" method="POST" enctype="multipart/form-data" novalidate>
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                          {!! Form::label('full_name', 'Usuario') !!}
                          <input type="text" name="name" value="{{$usuario->name}}" class="form-control" required autofocus>
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group {{ $errors->has('email') ? ' has-error' : '' }}">

                          {!! Form::label('email', 'Correo Electrónico') !!}
                          <input type="email" name="email" value="{{$usuario->email}}" class="form-control" required>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">

                    </div>
                    <button class="btn btn-primary pull-right" type="submit">Modificar Usuario</button>
                    <div class="clearfix"></div>
                 </form>
                </div>
              </div>
            </div>

@endsection
