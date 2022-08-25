@extends('layouts.template')

@section('template_title')
    {{ $certificacione->name ?? 'Show Certificacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Certificacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('certificaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipoidentificacioncertificaciones:</strong>
                            {{ $certificacione->tipoIdentificacionCertificaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Documentoidentidadalumno Id:</strong>
                            {{ $certificacione->documentoIdentidadAlumno_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrescertificaciones:</strong>
                            {{ $certificacione->nombresCertificaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Primerapellidocertificaciones:</strong>
                            {{ $certificacione->primerApellidoCertificaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Segundoapellidocertificaciones:</strong>
                            {{ $certificacione->segundoApellidoCertificaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Correoelectronicocertificaciones:</strong>
                            {{ $certificacione->correoElectronicoCertificaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodecertificaciones:</strong>
                            {{ $certificacione->tipodeCertificaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Anocertificacioncertificaciones:</strong>
                            {{ $certificacione->anoCertificacionCertificaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Certificacionesgrado Id:</strong>
                            {{ $certificacione->certificacionesGrado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarioscertificaciones:</strong>
                            {{ $certificacione->comentariosCertificaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
