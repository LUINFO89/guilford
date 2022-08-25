<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 14px;
        }
    </style>

</head>

<body>
    <h3>Lista de Solicitudes</h3>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>

                        <th>TipoID</th>
                        <th>Documento</th>
                        <th>Nombres</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Correo</th>
                        <th>Certificado</th>
                        <th>Año a solicitar</th>
                        <th>Programa o curso</th>
                        
                        <th>Comentariossolicitud</th>
                      

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitudes as $solicitude)
                    <tr>

                        <td>{{ $solicitude->tipoIdentificacionSolicitud }}</td>
                        <td>{{ $solicitude->documentoIdentidadSolicitud }}</td>
                        <td>{{ $solicitude->nombresSolicitud }}</td>
                        <td>{{ $solicitude->primerApellidoSolicitud }}</td>
                        <td>{{ $solicitude->segundoApellidoSolicitud }}</td>
                        <td>{{ $solicitude->correoElectronicoSolicitud }}</td>
                        <td>{{ $solicitude->tipodeCertificacionSolicitus }}</td>
                        <td>{{ $solicitude->anoCertificacionSolicitud }}</td>
                        <td>{{ $solicitude->gradoSolicitud }}</td>
                        
                        <td>{{ $solicitude->comentariosSolicitud }}</td>
                       


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>