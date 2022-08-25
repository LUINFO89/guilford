<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo de Pago</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 20px;
        }
    </style>

</head>

<body>
    <div class="card-body">
        <!--div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                       
                    
                        <th>Nombres</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        
                        <th>Tipo Certificacion</th>
                      
                        <th>Programa o curso Id</th>
                        <th>Comentarios</th>
                     
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certificaciones as $certificacione)
                    <tr>

                      
                        <td>{{ $certificacione->nombresCertificaciones }}</td>
                        <td>{{ $certificacione->primerApellidoCertificaciones }}</td>
                        <td>{{ $certificacione->segundoApellidoCertificaciones }}</td>
                   
                        <td>{{ $certificacione->tipodeCertificaciones }}</td>
                     
                        <td>{{ $certificacione->certificacionesGrado_id }}</td>
                        <td>{{ $certificacione->comentariosCertificaciones }}</td>
                  
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div-->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-18">
                    <div class="card">
                        <div class="card-header" style="height: 5%; ">
                            <div class="float-left">
                              
                                <span class="card-title" > <h3>Pago de Certificación</h3></span>
                                
                            </div>
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('certificaciones.index') }}"> Regresar. </a>
                            </div>
                           
                        </div>
    
                        <div class="card-body">
                          <strong>Detalle</strong>
                          <strong style="margin-left: 50%">Total a pagar: $  {{ $certificacione->grado->precioGrado }}</strong>
                          
                         
                          <hr>
                          <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $certificacione->nombresCertificaciones }} {{ $certificacione->primerApellidoCertificaciones }} {{ $certificacione->segundoApellidoCertificaciones }}
                        </div>
                            
                            <div class="form-group">
                                <strong>Identificación del Estudiante:</strong>
                                {{ $certificacione->tipoIdentificacionCertificaciones }} {{ $certificacione->alumno->documentoIdentidadAlumno }}
                            </div>
                            
                            
                          
                            <div class="form-group">
                                <strong>Email:</strong>
                                {{ $certificacione->correoElectronicoCertificaciones }}
                            </div>
                            
                            <div class="form-group">
                                <strong>Certificación Academica:</strong>
                                {{ $certificacione->tipodeCertificaciones }} Certificado de Estudios
                                
                            </div>
                            
                            <div class="form-group">
                                <strong>Curso :</strong>
                                {{ $certificacione->grado->nombreGrado }}
                            </div>
                            <hr>
                            <strong>Total a Pagar: {{ $certificacione->grado->precioGrado }} </strong>
                            
                            <div class="float-right">
                              <a class="btn btn-primary" href="https://recarga.nequi.com.co/bdigitalpsl/#!/"> Realizar Pago</a>
                          </div>
                            
                           
                            <hr>
                            <div class="form-group">
                              <strong>Forma de Pago:</strong>
                              Estudiante:
                              {{ $certificacione->nombresCertificaciones }} {{ $certificacione->primerApellidoCertificaciones }} {{ $certificacione->segundoApellidoCertificaciones }}
                          </div>
                          Recuerda que actualmente tenemos solo pagos establecedidos por bancolombia al numero : 2321332332 y por nequi al numero 305,8119573
                          <br>
                            <strong>Codigo para realizar el pago:</strong><br>
                            <img src="./assets/img/codigo.png" width="200px" height="200px">
                        


                              
    
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>



        
</body>



</html>