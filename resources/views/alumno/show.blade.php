@extends('layouts.template')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipoidentificacionalumno:</strong>
                            {{ $alumno->tipoIdentificacionAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Documentoidentidadalumno:</strong>
                            {{ $alumno->documentoIdentidadAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Nombresalumno:</strong>
                            {{ $alumno->nombresAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Primerapellidoalumno:</strong>
                            {{ $alumno->primerApellidoAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Segundoapellidoalumno:</strong>
                            {{ $alumno->segundoApellidoAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Correoelectronicoalumno:</strong>
                            {{ $alumno->correoElectronicoAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Direccionalumno:</strong>
                            {{ $alumno->direccionAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Telefonoalumno:</strong>
                            {{ $alumno->telefonoAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Fechadenacimientoalumno:</strong>
                            {{ $alumno->fechadeNacimientoAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Lugarnacimientoalumno:</strong>
                            {{ $alumno->lugarNacimientoAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodesangrealumno:</strong>
                            {{ $alumno->tipodeSangreAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Generoalumno:</strong>
                            {{ $alumno->generoAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Grados Id:</strong>
                            {{ $alumno->grados_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
