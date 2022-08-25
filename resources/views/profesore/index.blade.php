@extends('layouts.template')


@section('template_title')
    Profesores
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3> <i class="nc-icon nc-hat-3"></i>   {{ __('Listado Profesores ') }}</h3>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">


                             <div class="float-right">
                                <a href="{{ route('profesores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo Docente') }}
                                </a>
                              </div>
                              <a href="{{ route('profesores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Listado de profesores en PDF') }}
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
                                        
										<th>Identificación:</th>
										<th>Nombres:</th>
										<th>Telefono:</th>
										<th>Correo:</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profesores as $profesore)
                                        <tr>
                                            
											<td>{{ $profesore->identificacion_profesores }}</td>
											<td>{{ $profesore->nombre_profesores }}</td>
											<td>{{ $profesore->nombre_telefono }}</td>
											<td>{{ $profesore->nombre_correo }}</td>

                                            <td>
                                                <form action="{{ route('profesores.destroy',$profesore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('profesores.show',$profesore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('profesores.edit',$profesore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $profesores->links() !!}
            </div>
        </div>
    </div>
@endsection
