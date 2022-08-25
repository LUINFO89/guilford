<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipoIdentificacionSolicitud') }}
            {{ Form::text('tipoIdentificacionSolicitud', $solicitude->tipoIdentificacionSolicitud, ['class' => 'form-control' . ($errors->has('tipoIdentificacionSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Tipoidentificacionsolicitud']) }}
            {!! $errors->first('tipoIdentificacionSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('documentoIdentidadSolicitud') }}
            {{ Form::text('documentoIdentidadSolicitud', $solicitude->documentoIdentidadSolicitud, ['class' => 'form-control' . ($errors->has('documentoIdentidadSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Documentoidentidadsolicitud']) }}
            {!! $errors->first('documentoIdentidadSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombresSolicitud') }}
            {{ Form::text('nombresSolicitud', $solicitude->nombresSolicitud, ['class' => 'form-control' . ($errors->has('nombresSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Nombressolicitud']) }}
            {!! $errors->first('nombresSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primerApellidoSolicitud') }}
            {{ Form::text('primerApellidoSolicitud', $solicitude->primerApellidoSolicitud, ['class' => 'form-control' . ($errors->has('primerApellidoSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Primerapellidosolicitud']) }}
            {!! $errors->first('primerApellidoSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundoApellidoSolicitud') }}
            {{ Form::text('segundoApellidoSolicitud', $solicitude->segundoApellidoSolicitud, ['class' => 'form-control' . ($errors->has('segundoApellidoSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Segundoapellidosolicitud']) }}
            {!! $errors->first('segundoApellidoSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correoElectronicoSolicitud') }}
            {{ Form::text('correoElectronicoSolicitud', $solicitude->correoElectronicoSolicitud, ['class' => 'form-control' . ($errors->has('correoElectronicoSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Correoelectronicosolicitud']) }}
            {!! $errors->first('correoElectronicoSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipodeCertificacionSolicitus') }}
            {{ Form::text('tipodeCertificacionSolicitus', $solicitude->tipodeCertificacionSolicitus, ['class' => 'form-control' . ($errors->has('tipodeCertificacionSolicitus') ? ' is-invalid' : ''), 'placeholder' => 'Tipodecertificacionsolicitus']) }}
            {!! $errors->first('tipodeCertificacionSolicitus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anodeingreso') }}
            {{ Form::text('anodeingreso', $solicitude->anodeingreso, ['class' => 'form-control' . ($errors->has('anodeingreso') ? ' is-invalid' : ''), 'placeholder' => 'Anodeingreso']) }}
            {!! $errors->first('anodeingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gradoSolicitud') }}
            {{ Form::text('gradoSolicitud', $solicitude->gradoSolicitud, ['class' => 'form-control' . ($errors->has('gradoSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Gradosolicitud']) }}
            {!! $errors->first('gradoSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>