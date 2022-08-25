<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informe de progrmas activos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h1{
            font-size: 40PX;
        }
        table {
            font-size: 20px;
        }
    </style>

</head>

<body>
    <h1>LISTADO DE PROGRAMAS ACADEMICOS</h1>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>


                        <th>Nombre</th>
                        <th>Precio</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($grados as $grado)
                    <tr>


                        <td>{{ $grado->nombreGrado }}</td>
                        <td>{{ $grado->precioGrado }}</td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>