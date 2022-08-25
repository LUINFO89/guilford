<div class="box box-info padding-1">
    <div class="box-body" style="width: 50%">
        
        <div class="form-group">
            {{ Form::label('Nombre de la Asignatura:') }}
            {{ Form::text('nombre_asignatura', $asignatura->nombre_asignatura, ['class' => 'form-control' . ($errors->has('nombre_asignatura') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombre_asignatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de creditos:') }}
            {{ Form::text('creditos', $asignatura->creditos, ['class' => 'form-control' . ($errors->has('creditos') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('creditos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Profesor encargado:') }}
            {{ Form::select('id_profesor', $profesor , $asignatura->id_profesor, ['class' => 'form-control' . ($errors->has('id_profesor') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('id_profesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>