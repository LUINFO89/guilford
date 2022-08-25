@extends('layouts.template')

@section('template_title')
    Solicitudes Educativas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-sm-12">
                <h3> <i class="nc-icon nc-bullet-list-67"></i>   {{ __('Seleccione') }}</h3>

                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            
                            <div class="float-center" style="margin-right: 80%">
                                <a href="{{ route('certificaciones.create') }}" class="btn  btn-sm float-right"  data-placement="right">
                                    <i class="nc-icon nc-paper"></i>

                                    {{ __('Generar Nueva Certificación') }}
                                </a>
            
                                  <a href="{{ route('certificaciones.index') }}" class="btn btn-primary btn-sm "  data-placement="">
                                    <i class="nc-icon nc-hat-3"></i>
                                    {{ __('Consultar Certificaciones realizadas') }}
                                  </a>
                              </div>
                              

                             <!--div class="float-right" style="margin-right: 80%">
                                <a href="{{ route('solicitudes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="right">
                                  {{ __('Generar NUeva Solicitud') }}
                                </a>
                              </div>
                              <div class="float-right" style="margin-right: 80%">
                                <a href="{{ route('solicitudes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="right">
                                  {{ __('Generar NUeva Solicitud') }}
                                </a>
                              </div-->
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <!--div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Nombre Estudiante</th>
										<th>Apellido</th>
										
										<th>Email</th>
										
									

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudes as $solicitude)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $solicitude->tipodeCertificacionSolicitus }}</td>
											
											<td>{{ $solicitude->nombresSolicitud }}</td>
											<td>{{ $solicitude->primerApellidoSolicitud }}</td>
										
											<td>{{ $solicitude->correoElectronicoSolicitud }}</td>
											
											

                                            <td>
                                                <form action="{{ route('solicitudes.destroy',$solicitude->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('solicitudes.show',$solicitude->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('solicitudes.edit',$solicitude->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $solicitudes->links() !!}
            </div>
        </div>
    </div>
@endsection
