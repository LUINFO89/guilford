<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
        
    </style>
   
</head>
<body style="width: 100">
    <div class="container py-5">
        <h5 class=" font-weight-bold"> Informe Estudiantes</h5>
        <table class="table table-bordered mt-1">
            <thead >
                <tr>
                    
                    <th>Tipo</th>
                    <th>Identificacion</th>
                    <th>Nombres</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Fecha Nacimiento</th>
                    <th>Lugar Nacimiento</th>
                    <th>RH</th>
                    <th>Genero</th>
                    <th>Programa</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        
                        <td>{{ $alumno->tipoIdentificacionAlumno }}</td>
                        <td>{{ $alumno->documentoIdentidadAlumno }}</td>
                        <td>{{ $alumno->nombresAlumno }}</td>
                        <td>{{ $alumno->primerApellidoAlumno }}</td>
                        <td>{{ $alumno->segundoApellidoAlumno }}</td>
                        <td>{{ $alumno->correoElectronicoAlumno }}</td>
                        <td>{{ $alumno->direccionAlumno }}</td>
                        <td>{{ $alumno->telefonoAlumno }}</td>
                        <td>{{ $alumno->fechadeNacimientoAlumno }}</td>
                        <td>{{ $alumno->lugarNacimientoAlumno }}</td>
                        <td>{{ $alumno->tipodeSangreAlumno }}</td>
                        <td>{{ $alumno->generoAlumno }}</td>
                        <td>{{ $alumno->grados_id }}</td>

                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>