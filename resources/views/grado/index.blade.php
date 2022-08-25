@extends('layouts.template')

@section('template_title')
Grados
@endsection

@section('content')
<div class="row m-0">
    <div class="col-sm-12">
       <h3> <i class="nc-icon nc-badge"></i>   {{ __('Listado de Grados ') }}</h3>
        <div class="card">
            <div class="card-header">
                <div style="display: flex; justify-content: space-between; align-items: center;">

                  

                    <div class="float-right">
                        <a href="{{ route('grados.create') }}" class="btn btn-primary btn-sm float-right"
                            data-placement="left">
                            {{ __('Crear nuevo grado') }}
                        </a>
                        
                    </div>
                    <a href="{{ route('download-pdf-grados') }}" class="btn btn-primary btn-sm float-right"
                            data-placement="left">
                            {{ __('lista total de grados en pdf') }}
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

                                <th>Nombre</th>
                                <th>Precio</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($grados as $grado)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $grado->nombreGrado }}</td>
                                <td>{{ $grado->precioGrado }}</td>

                                <td>
                                    <form action="{{ route('grados.destroy',$grado->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary "
                                            href="{{ route('grados.show',$grado->id) }}"><i class="fa fa-fw fa-eye"></i>
                                            Ver </a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('grados.edit',$grado->id) }}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash" "
                                                
                                                ></i> Eliminar </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {!! $grados->links() !!}
    </div>
</div>
</div>
@endsection