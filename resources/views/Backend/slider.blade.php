@extends ('Backend.layout.layout')

@section('content')

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Slider</h4>
                  <a href="{{ route('formslider')}}" class="card-category">
                  <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                    <i class="material-icons">library_add</i>
                  </button>
                   Agregar Slider</a>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <input id="mostra_vista" value="slider" hidden disabled>
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

                        @foreach($sliders as $slider)
                        <tr>
                          <td>
                              {{ $slider->titulo }}
                          </td>
                          <td>
                            {{ $slider->publico }}
                          </td>
                          <td>
                             {{ $slider->posicion }}
                          </td>
                          <td>
                            {{ $slider->created_at}}
                          </td>
                          <td class="td-actions">
                            <a type="button" rel="tooltip" title="" href="{{ route('buscarslider',['id'=>$slider->id])}}" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                              <i class="material-icons">edit</i>
                            </a>
                            <a type="button" rel="tooltip" title="" href="{{ route('eliminarslider',['id'=>$slider->id])}}" class="btn btn-white btn-link btn-sm" data-original-title="Remover">
                              <i class="material-icons">close</i>
                            </a>
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
