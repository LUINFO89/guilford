@extends('layouts.template')

@section('template_title')
    {{ $asignatura->name ?? 'Show Asignatura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Asignatura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignaturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Asignatura:</strong>
                            {{ $asignatura->nombre_asignatura }}
                        </div>
                        <div class="form-group">
                            <strong>Creditos:</strong>
                            {{ $asignatura->creditos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Profesor:</strong>
                            {{ $asignatura->id_profesor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
