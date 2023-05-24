## PRUEBA TECNICA BROWSER TRAVEL SOLUTIONS

Se desarrolla un microservicio, utilizando el framwork laravel 10.

Se hace uso de la api de https://home.openweathermap.org, generando la api key con el proceso de registro.

Se establece a traves de las coordenadas de las ciudades(latitud y longitud), para poder parametrizar la consulta
en la api y obtener el valor de la humedad.

para la visualizacion del mapa y de las humedades al hacer click sobre el marcador, se utiliza https://leafletjs.com/, para
la interactividad del mapa.

-   Se debe hacer la migracion de la tabla weather_history a traves del comando `php artisan migrate`, se uso en este caso MYSQL.

-   Luego se levanta el proyecto con `php artisan serve`

-   para iniciar en el navegador se debe navegar en http://localhost:8000/map
