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
                        <tr>
                          <td>
                              Titulo Estatico 1
                          </td>
                          <td>
                            Si
                          </td>
                          <td>
                            1
                          </td>
                          <td>
                            29/10/2018
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
                        <tr>
                          <td>
                            Titulo Estatico 2
                          </td>
                          <td>
                            Si
                          </td>
                          <td>
                            3
                          </td>
                          <td>
                          28/10/2018
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
                        <tr>
                          <td>
                             Titulo Estatico 3
                          </td>
                          <td>
                            No
                          </td>
                          <td>
                            2
                          </td>
                          <td>
                            30/10/2018
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
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>



@endsection

@push('scripts')

@endpush
