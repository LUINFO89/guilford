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
                            <span class="card-title">Show certificaciones por certificacion </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('certificaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipoidentificacioncertificaciones:</strong>
                            {{ $certificacione -> nombresCertificaciones}}
                        </div>
                        <div class="form-group">
                            <strong>Documentoidentidadalumno Id:</strong>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
