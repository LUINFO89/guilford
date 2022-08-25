<div id="alert">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Atención!</h4>
        <p>Su nombre y número de cedula deben estar registrados como se indica en su documento de identidad (cédula de ciudadania ) </p>
        <hr>    
        <p class="mb-0">Verifique que sus datos sean correctos. Ya que de esto dependen que su diploma se emita correctamente. </p>
      </div>
</div>
<style>
</style>
<div class="box box-info padding-1">
    <div class="box-body" style="width: 50%">
        <label for="" style="font-size: 25px">1. Identificación del Estudiante </label>
       
        <div class="form-group">
            {{ Form::label('Cédula identidad o pasaporte:') }}
            {{ Form::select('documentoIdentidadAlumno_id',$estudiante, $certificacione->documentoIdentidadAlumno_id, ['class' => 'form-control' . ($errors->has('documentoIdentidadAlumno_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('documentoIdentidadAlumno_id', '<div class="invalid-feedback">:message</div>') !!}

        </div>
        <div class="form-group">
            {{ Form::label('Nombres:') }}
            {{ Form::text('nombresCertificaciones', $certificacione->nombresCertificaciones, ['class' => 'form-control' . ($errors->has('nombresCertificaciones') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombresCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Primer Apellido:') }}
            {{ Form::text('primerApellidoCertificaciones', $certificacione->primerApellidoCertificaciones, ['class' => 'form-control' . ($errors->has('primerApellidoCertificaciones') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('primerApellidoCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Segundo Apellido:') }}
            {{ Form::text('segundoApellidoCertificaciones', $certificacione->segundoApellidoCertificaciones, ['class' => 'form-control' . ($errors->has('segundoApellidoCertificaciones') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('segundoApellidoCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo Electronico: ') }}
            {{ Form::text('correoElectronicoCertificaciones', $certificacione->correoElectronicoCertificaciones, ['class' => 'form-control' . ($errors->has('correoElectronicoCertificaciones') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('correoElectronicoCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Año de ingreso a la institución: ') }}
            {{ Form::text('anoCertificacionCertificaciones', $certificacione->anoCertificacionCertificaciones, ['class' => 'form-control' . ($errors->has('anoCertificacionCertificaciones') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('anoCertificacionCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <label for="" style="font-size: 25px">2. Tipo de Certificación del Estudiante </label>
        {{ Form::label('Seleccione los detalles de la certificación: ') }}
        <!--div class="form-group">
            {{ Form::label('Tipo de Certificación: ') }}
            {{ Form::text('tipodeCertificaciones', $certificacione->tipodeCertificaciones, ['class' => 'form-control' . ($errors->has('tipodeCertificaciones') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('tipodeCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div-->
        <div class="form-group">
            {{ Form::label('Tipo de Certificación: ') }}
            {{ Form::select('tipodeCertificaciones',['Seleccione el Cerificado ','Asignaturas aprobadas', 'Asignaturas Cursadas','Certificado de Estudios','Certificado de paz y salvo','Certificación de Finalización del curso'],0, ['class' => 'form-control' ]) }}
            {!! $errors->first('tipodeCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <label for="" style="font-size: 25px">3. Carrera o curso de la Certificación </label>

        <div class="form-group">
            {{ Form::label('Curso para la Certificación:') }}
            {{ Form::select('certificacionesGrado_id', $grados, $certificacione->certificacionesGrado_id, ['class' => 'form-control' . ($errors->has('certificacionesGrado_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('certificacionesGrado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <label for="" style="font-size: 25px">4. Observaciones </label>

        <div class="form-group">
            {{ Form::label('Indique alguna obervación para su certificación:') }}
            {{ Form::textArea('comentariosCertificaciones', $certificacione->comentariosCertificaciones, ['class' => 'form-control' . ($errors->has('comentariosCertificaciones') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('comentariosCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
