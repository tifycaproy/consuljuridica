@extends ('Backend.layout.layout')

@section('content')

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Usuarios Registrados</h4>
                  <a href="<?php echo route('ingresarmodulo', ['modulo' => 'register'])?>" class="card-category">
                  <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                    <i class="material-icons">person_add</i>
                  </button>
                   Agregar usuario</a>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          Usuario
                        </th>
                        <th>
                          Correo Electrónico
                        </th>
                        <th>
                          Rol
                        </th>
                        <th>
                          Fecha
                        </th>
												<th>
													Acciones
												</th>
                      </tr></thead>
                      <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                          <td>
                              {{ $usuario->usuario }}
                          </td>
                          <td>
                            {{ $usuario->email }}
                          </td>
                          <td>
                             {{ $usuario->rol }}
                          </td>
                          <td>
                            {{ $usuario->created_at}}
                          </td>
                          <td class="td-actions">
                            <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remover">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>



@endsection

@push('scripts')
@endpush
