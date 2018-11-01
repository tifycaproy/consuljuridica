@extends ('Backend.layout.layout')

@section('content')

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Slider</h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
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