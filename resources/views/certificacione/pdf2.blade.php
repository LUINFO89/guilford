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
            font-size: 20px;
        }
    </style>

</head>

<body>
    <div class="card-body">
        <div class="table-responsive">
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
        </div>
    </div>
</body>



</html>