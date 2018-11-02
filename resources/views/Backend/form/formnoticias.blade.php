@extends ('Backend.layout.layout')

@section('content')

<input id="mostra_vista" value="noticias" hidden disabled>
<div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Crear Noticia</h4>
                  <p class="card-category">Complete todos los datos</p>
                </div>
                <div class="card-body">
                  {!! Form::open(['route' => 'ingresarnoticia','enctype'=>'multipart/form-data','method'=>'POST']) !!}
                    <!-- {{ csrf_field() }} -->
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group {{ $errors->has('titulo') ? ' has-error' : '' }}">
                          {!! Form::label('titulo', 'Titulo') !!}
                          {!! Form::text('titulo', null, ['class' => 'form-control' , 'required' => 'required', 'autofocus'=> 'autofocus']) !!}

                          @if ($errors->has('titulo'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('titulo') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group bmd-form-group {{ $errors->has('publico') ? ' has-error' : '' }}">
                          <div class="form-check form-check-inline">
                          <label id="publico" class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            Público
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                          <input id="publicoval" name="publico" type="text" value="0" hidden>
                        </div>
                          @if ($errors->has('publico'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('publico') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group {{ $errors->has('resumen') ? ' has-error' : '' }}">
                          {!! Form::label('resumen','Resumen (Opcional)') !!}
                          <div class="form-group bmd-form-group">
                            {!! Form::textarea('resumen', null, ['class' => 'form-control', 'rows'=>'4']) !!}
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                        {!! Form::label('descripcion','Descripción (Opcional)') !!}
                        <div class="form-group bmd-form-group">
                            <!-- {!! Form::label('resumen','Se representa en la vista previa de las noticias',['class' => 'bmd-label-floating-control']) !!} -->
                          {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows'=>'4']) !!}
                          @if ($errors->has('descripcion'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('descripcion') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group {{ $errors->has('email') ? ' has-error' : '' }}">

                          {!! Form::label('posicion', 'Posición') !!}
                          {!! Form::number('posicion',  1, ['class' => 'form-control',  'required' => 'required', 'number'=>'true', 'min' => '1']) !!}
                          @if ($errors->has('posicion'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('posicion') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>

                    <div class="col-md-4">
                      <div class="form-group bmd-form-group {{ $errors->has('url_multimedia') ? ' has-error' : '' }}">

                        {!! Form::label('url_multimedia', 'Enlace Multimedia   O') !!}
                        <input type="url" id="enlace" name="url_multimedia" class="form-control" required>
                        @if ($errors->has('url_multimedia'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url_multimedia') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group bmd-form-group {{ $errors->has('url_imagen') ? ' has-error' : '' }}">
                        <div class="fileinput text-center fileinput-new" data-provides="fileinput">
                          {!! Form::label('image','Subir Imagen') !!}
                            <div class="fileinput-new thumbnail">
                              <img src="{{URL::to('/material-dashboard-dark-edition-v2.1.0/assets')}}/img/image_placeholder.jpg" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                            <div>
                              <span class="btn btn-rose btn-round btn-file">
                                <span  class="fileinput-new">Imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                <input id="imagen" name="url_imagen" type="file" required>
                                  @if ($errors->has('url_imagen'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('url_imagen') }}</strong>
                                      </span>
                                  @endif
                              <div class="ripple-container"></div></span>
                              <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Quitar<div class="ripple-container"><div class="ripple-decorator ripple-on ripple-out" style="left: 52.4px; top: 14.4833px; background-color: rgb(255, 255, 255); transform: scale(15.5063);"></div></div></a>
                            </div>
                          </div>
                        </div>
                  </div>
                  </div>
                    <input class="btn btn-primary pull-right" type="submit" value="Crear Nota">
                    <div class="clearfix"></div>
                 {!! Form::close() !!}
                </div>
              </div>
            </div>

@endsection
