<div class="box box-info padding-1">
    <div class="box-body"style="width: 50%">

        <div class="form-group">
            {{ Form::label('Tipo de documento: ') }}
            {{ Form::select('tipoIdentificacionAlumno',['Seleccione el tipo de documento','CC','RC','TI','TE'],0, ['class' => 'form-control' ]) }}
            {!! $errors->first('tipoIdentificacionAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de documento: ') }}
            {{ Form::text('documentoIdentidadAlumno', $alumno->documentoIdentidadAlumno, ['class' => 'form-control' .
            ($errors->has('documentoIdentidadAlumno') ? ' is-invalid' : ''), 'placeholder' =>
            '']) }}
            {!! $errors->first('documentoIdentidadAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres :') }}
            {{ Form::text('nombresAlumno', $alumno->nombresAlumno, ['class' => 'form-control' .
            ($errors->has('nombresAlumno') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombresAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Primer Apellido:') }}
            {{ Form::text('primerApellidoAlumno', $alumno->primerApellidoAlumno, ['class' => 'form-control' .
            ($errors->has('primerApellidoAlumno') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('primerApellidoAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Segundo Apellido') }}
            {{ Form::text('segundoApellidoAlumno', $alumno->segundoApellidoAlumno, ['class' => 'form-control' .
            ($errors->has('segundoApellidoAlumno') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('segundoApellidoAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email:') }}
            {{ Form::text('correoElectronicoAlumno', $alumno->correoElectronicoAlumno, ['class' => 'form-control' .
            ($errors->has('correoElectronicoAlumno') ? ' is-invalid' : ''), 'placeholder' => ''])
            }}
            {!! $errors->first('correoElectronicoAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('direccionAlumno', $alumno->direccionAlumno, ['class' => 'form-control' .
            ($errors->has('direccionAlumno') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('direccionAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefonoAlumno', $alumno->telefonoAlumno, ['class' => 'form-control' .
            ($errors->has('telefonoAlumno') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('telefonoAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de Nacimiento') }}
            {{ Form::date('fechadeNacimientoAlumno', $alumno->fechadeNacimientoAlumno, ['class' => 'form-control' .
            ($errors->has('fechadeNacimientoAlumno') ? ' is-invalid' : ''), 'placeholder' => ''])
            }}
            {!! $errors->first('fechadeNacimientoAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lugar de Nacimiento ') }} <br>

            {{ Form::select('lugarNacimientoAlumno',['Colombia','Ecuador','Bolivia',
            'Chile','Brazil','Venezuela','Peru',
            'Argentina','Uruguay','Mexico',
            'Centro America','Usa'], ['class' => 'form-control' ]),($errors->has('generoAlumno') ? ' is-invalid' : '') }}

            {!! $errors->first('lugarNacimientoAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipodeSangreAlumno') }}
            {{ Form::select('tipodeSangreAlumno',['A+', 'A-','AB+','AB-',
            'B+','B-','O+','O-'], ['class' => 'form-control' ]), ($errors->has('generoAlumno') ? ' is-invalid' : '') }}

            {!! $errors->first('tipodeSangreAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('generoAlumno') }}
            {{ Form::select('generoAlumno',['Seleccione','Masculino', 'Femenino'],0, ['class' => 'form-control' ]),
            ($errors->has('generoAlumno') ? ' is-invalid' : '') }}
            {!! $errors->first('generoAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grados_id') }}
            {{ Form::select('grados_id',$grados, $alumno->grados_id, ['class' => 'form-control' .
            ($errors->has('grados_id') ? ' is-invalid' : ''), 'placeholder' => 'Grados Id']) }}
            {!! $errors->first('grados_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
</div>