@extends('layouts.template')

@section('template_title')
    {{ $solicitude->name ?? 'Show Solicitude' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Solicitude</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitudes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipoidentificacionsolicitud:</strong>
                            {{ $solicitude->tipoIdentificacionSolicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Documentoidentidadsolicitud:</strong>
                            {{ $solicitude->documentoIdentidadSolicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Nombressolicitud:</strong>
                            {{ $solicitude->nombresSolicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Primerapellidosolicitud:</strong>
                            {{ $solicitude->primerApellidoSolicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Segundoapellidosolicitud:</strong>
                            {{ $solicitude->segundoApellidoSolicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Correoelectronicosolicitud:</strong>
                            {{ $solicitude->correoElectronicoSolicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodecertificacionsolicitus:</strong>
                            {{ $solicitude->tipodeCertificacionSolicitus }}
                        </div>
                        <div class="form-group">
                            <strong>Anodeingreso:</strong>
                            {{ $solicitude->anodeingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Gradosolicitud:</strong>
                            {{ $solicitude->gradoSolicitud }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
