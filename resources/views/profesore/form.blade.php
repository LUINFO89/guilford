<div class="box box-info padding-1">
    <div class="box-body" style="width: 50%">
        
        <div class="form-group">
            {{ Form::label('Numero de Identificación:') }}
            {{ Form::text('identificacion_profesores', $profesore->identificacion_profesores, ['class' => 'form-control' . ($errors->has('identificacion_profesores') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('identificacion_profesores', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre:') }}
            {{ Form::text('nombre_profesores', $profesore->nombre_profesores, ['class' => 'form-control' . ($errors->has('nombre_profesores') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombre_profesores', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono:') }}
            {{ Form::text('nombre_telefono', $profesore->nombre_telefono, ['class' => 'form-control' . ($errors->has('nombre_telefono') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombre_telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email:') }}
            {{ Form::text('nombre_correo', $profesore->nombre_correo, ['class' => 'form-control' . ($errors->has('nombre_correo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombre_correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    <div class="float-right">
        <a class="btn btn-secundary" href="{{ route('profesores.index') }}"> Back</a>
    </div>
</div>