<div class="box box-info padding-1">
    <div class="box-body"style="width: 200px">
        
        <div class="form-group" >
            {{ Form::label('nombre') }}
            {{ Form::text('nombreGrado', $grado->nombreGrado, ['class' => 'form-control' . ($errors->has('nombreGrado') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombreGrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio Matricula') }}
            {{ Form::text('precioGrado', $grado->precioGrado, ['class' => 'form-control' . ($errors->has('precioGrado') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('precioGrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>