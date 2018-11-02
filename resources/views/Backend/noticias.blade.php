@extends ('Backend.layout.layout')

@section('content')

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Noticias</h4>
                  <a href="{{ route('ingresarmodulo', ['modulo' => 'nuevanoticia']) }}" class="card-category">
                  <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                    <i class="material-icons">playlist_add</i>
                  </button>
                   Agregar Noticia</a>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <input id="mostra_vista" value="noticias" hidden disabled>
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          Título
                        </th>
                        <th>
                          Público
                        </th>
                        <th>
                          Posición
                        </th>
                        <th>
                          Fecha
                        </th>
												<th>
													Acciones
												</th>
                      </tr></thead>
                      <tbody>

                        @foreach($noticias as $noticia)
                        <tr>
                          <td>
                              {{ $noticia->titulo }}
                          </td>
                          <td>
                            {{ $noticia->publico }}
                          </td>
                          <td>
                             {{ $noticia->posicion }}
                          </td>
                          <td>
                            {{ $noticia->created_at}}
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
