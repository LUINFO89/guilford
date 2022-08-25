@extends('layouts.template')

@section('template_title')
    {{ $nota->name ?? 'Show Nota' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Estudiante:</strong>
                            {{ $nota->nombre_estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Id Asignatura Estudiante:</strong>
                            {{ $nota->id_asignatura_estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Id Curso Estudiante:</strong>
                            {{ $nota->id_curso_estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Id Identidad Alumno:</strong>
                            {{ $nota->id_identidad_alumno }}
                        </div>
                        <div class="form-group">
                            <strong>Id Profesor:</strong>
                            {{ $nota->id_profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Email Estudiante:</strong>
                            {{ $nota->email_estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Nota1:</strong>
                            {{ $nota->nota1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota2:</strong>
                            {{ $nota->nota2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota3:</strong>
                            {{ $nota->nota3 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota4:</strong>
                            {{ $nota->nota4 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota Final:</strong>
                            {{ $nota->nota_final }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $nota->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
