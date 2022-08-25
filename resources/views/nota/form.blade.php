<div class="box box-info padding-1">
    <div class="box-body" style="width: 50%">
        
        <div class="form-group">
            {{ Form::label('nombre_estudiante') }}
            {{ Form::select('nombre_estudiante',$estudiante, $nota->nombre_estudiante, ['class' => 'form-control' . ($errors->has('nombre_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Estudiante']) }}
            {!! $errors->first('nombre_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_asignatura_estudiante') }}
            {{ Form::select('id_asignatura_estudiante',$asignatura, $nota->id_asignatura_estudiante, ['class' => 'form-control' . ($errors->has('id_asignatura_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Id Asignatura Estudiante']) }}
            {!! $errors->first('id_asignatura_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_curso_estudiante') }}
            {{ Form::select('id_curso_estudiante',$curso,  $nota->id_curso_estudiante, ['class' => 'form-control' . ($errors->has('id_curso_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Id Curso Estudiante']) }}
            {!! $errors->first('id_curso_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_identidad_alumno') }}
            {{ Form::select('id_identidad_alumno',$estudiante_id,  $nota->id_identidad_alumno, ['class' => 'form-control' . ($errors->has('id_identidad_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Id Identidad Alumno']) }}
            {!! $errors->first('id_identidad_alumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_profesor') }}
            {{ Form::select('id_profesor',$profesor,  $nota->id_profesor, ['class' => 'form-control' . ($errors->has('id_profesor') ? ' is-invalid' : ''), 'placeholder' => 'Id Profesor']) }}
            {!! $errors->first('id_profesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email_estudiante') }}
            {{ Form::text('email_estudiante', $nota->email_estudiante, ['class' => 'form-control' . ($errors->has('email_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Email Estudiante']) }}
            {!! $errors->first('email_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota1') }}
            {{ Form::text('nota1', $nota->nota1, ['class' => 'form-control' . ($errors->has('nota1') ? ' is-invalid' : ''), 'placeholder' => 'Nota1']) }}
            {!! $errors->first('nota1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota2') }}
            {{ Form::text('nota2', $nota->nota2, ['class' => 'form-control' . ($errors->has('nota2') ? ' is-invalid' : ''), 'placeholder' => 'Nota2']) }}
            {!! $errors->first('nota2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota3') }}
            {{ Form::text('nota3', $nota->nota3, ['class' => 'form-control' . ($errors->has('nota3') ? ' is-invalid' : ''), 'placeholder' => 'Nota3']) }}
            {!! $errors->first('nota3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota4') }}
            {{ Form::text('nota4', $nota->nota4, ['class' => 'form-control' . ($errors->has('nota4') ? ' is-invalid' : ''), 'placeholder' => 'Nota4']) }}
            {!! $errors->first('nota4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota_final') }}
            {{ Form::text('nota_final', $nota->nota_final, ['class' => 'form-control' . ($errors->has('nota_final') ? ' is-invalid' : ''), 'placeholder' => 'Nota Final']) }}
            {!! $errors->first('nota_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $nota->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>