@extends('layouts.template')

@section('template_title')
    Asignatura
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3> <i class="nc-icon nc-app"></i>   {{ __('Listado de  Asignaturas') }}</h3>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                           
                             <div class="float-right">
                                <a href="{{ route('asignaturas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva asignatura') }}
                                </a>
                              </div>
                              <a href="{{ route('asignaturas.create') }}" class="btn btn-secundary btn-sm float-right"  data-placement="left">
                                {{ __('Listar asignaturas en PDF') }}
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
                                        
										<th>Nombre Asignatura</th>
										<th>Creditos</th>
										<th>Profesor encargado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignaturas as $asignatura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $asignatura->nombre_asignatura }}</td>
											<td>{{ $asignatura->creditos }}</td>
											<td>{{ $asignatura->profesore->nombre_profesores }}</td>

                                            <td>
                                                <form action="{{ route('asignaturas.destroy',$asignatura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asignaturas.show',$asignatura->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asignaturas.edit',$asignatura->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $asignaturas->links() !!}
            </div>
        </div>
    </div>
@endsection
