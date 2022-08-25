@extends('layouts.template')


@section('template_title')
    {{ $profesore->name ?? 'Show Profesore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver información del docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('profesores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Identificacion Profesores:</strong>
                            {{ $profesore->identificacion_profesores }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Profesores:</strong>
                            {{ $profesore->nombre_profesores }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Telefono:</strong>
                            {{ $profesore->nombre_telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Correo:</strong>
                            {{ $profesore->nombre_correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
