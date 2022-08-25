@extends('layouts.template')

@section('template_title')
    Certificacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-sm-12">
                <h3> <i class="nc-icon nc-money-coins"></i> {{ __('Listado de Certificaciones ') }}
                </h3>

                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('certificaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva certificación') }}
                                </a>
                              </div>
                              <a href="{{ route('certificaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Listado de certificaciones en PDF') }}
                              </a>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>


										<th>Numero de Identificación</th>
										
										<th>Nombres</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Correo</th>
                                        <th>Año de Ingreso</th>
										<th>Tipo de Certificación</th>
										<th>Curso o carrera</th>
									

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($certificaciones as $certificacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $certificacione->alumno->documentoIdentidadAlumno }}</td>
											<td>{{ $certificacione->nombresCertificaciones }}</td>
											<td>{{ $certificacione->primerApellidoCertificaciones }}</td>
											<td>{{ $certificacione->segundoApellidoCertificaciones }}</td>
											<td>{{ $certificacione->correoElectronicoCertificaciones }}</td>
                                            <td>{{ $certificacione->anoCertificacionCertificaciones }}</td>

											<td>{{ $certificacione->tipodeCertificaciones }}</td>
											<td>{{ $certificacione->grado->nombreGrado }}</td>
											

                                            <td>
                                                <form action="{{ route('certificaciones.destroy',$certificacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('certificaciones.edit',$certificacione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    
                                                   
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                                <a href="{{ route('download-pdf-certificaciones') }}" class="btn btn-primary btn-sm float-right"
                                                    data-placement="left">
                                                    {{ __('Recibo de pago') }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $certificaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
