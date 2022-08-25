@extends('layouts.template')

@section('template_title')
    Alumno
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3> <i class="nc-icon nc-circle-10"></i>   {{ __('Listado de Alumnos ') }}</h3>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                         

                             <div class="float-right">
                                <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo Alumno ') }}
                                </a>
                                
                              </div>
                              <a href="{{ route('download-pdf') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Listado Generarl de alumnos en PDF') }}
                              </a>
                             
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                   

                    <div class="card-body " >
                        <div class="table-responsive">
                            <table class="table table-striped table-hover  mt-5" >
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Tipo</th>
										<th>Identificacion</th>
										<th>Nombres</th>
										<th>Primer Apellido</th>
										<th>Correo</th>
										<th>Direccion</th>
										<th>Telefono</th>
										
										<th>Programa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $alumno->tipoIdentificacionAlumno }}</td>
											<td>{{ $alumno->documentoIdentidadAlumno }}</td>
											<td>{{ $alumno->nombresAlumno }}</td>
											<td>{{ $alumno->primerApellidoAlumno }}</td>
											<td>{{ $alumno->correoElectronicoAlumno }}</td>
											<td>{{ $alumno->direccionAlumno }}</td>
											<td>{{ $alumno->telefonoAlumno }}</td>
											
											<td>{{ $alumno->grado->nombreGrado }}</td>

                                            <td>
                                                <form action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('alumnos.show',$alumno->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alumnos.edit',$alumno->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $alumnos->links() !!}
            </div>
        </div>
    </div>
@endsection
