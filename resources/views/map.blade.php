<!DOCTYPE html>
<html lang="es">

<head>
    <title>Mapa Prueba Browser</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
</head>

<body>
    <div id="map" style="height: 400px;"></div>
    <a href="{{ route('history') }}">Ver Historial de Consultas</a>

    <script>
        var map = L.map('map').setView([25.7617, -80.1918], 10); // Miami coordinates

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 18
        }).addTo(map);

        // Agrega la lógica para obtener los datos de humedad a través de la ruta '/humidity' y mostrarlos en el mapa
        fetch('/humidity')
            .then(response => response.json())
            .then(data => {
                // Itera sobre los datos de humedad y agrega marcadores al mapa
                for (var city in data) {
                    var humidity = data[city];
                    var coordinates = {
                        'Miami': [25.7617, -80.1918],
                        'Orlando': [28.5383, -81.3792],
                        'New York': [40.7128, -74.0060]
                    };
                    //Colocamos la consulta de la humedad
                    L.marker(coordinates[city]).addTo(map).bindPopup(city + ': ' + humidity + '% Humedad.');
                }
            });
    </script>
</body>

</html>
