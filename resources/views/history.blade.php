<!DOCTYPE html>
<html lang=es>

<head>
    <title>Historial de Humedades</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <h1 class="text-center">Historial de Consultas de Humedad</h1>

        <table class="table">
            <caption>LIstado Humedades</caption>
            <thead>
                <tr>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Humedad(F)</th>
                    <th scope="col">Fecha y Hora</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($history as $record)
                    <tr>
                        <td>{{ $record->city }}</td>
                        <td>{{ $record->humidity }}</td>
                        <td>{{ $record->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>
