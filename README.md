<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center"><img src="https://miro.medium.com/max/1143/0*pmzFKg-nX_Kec6k8.jpg" width="400"></p>


Levantar Proyecto 
-----------------

El proyecto contiene un entorno de ejecución implementado con Laradock, junto a Nginx como servidor web y Mysql como motor de base de datos.

Directorio de proyecto/

 - Ejecutar **sudo chmod 777 composer.phar** -> damos permisos de lectura y ejecución para posterior instalación
 
cd laradock/

 - Ejecutar **docker-compose up -d nginx mysql** -> esto levanta los contenedores en segundo plano
 - Ejecutar **docker-compose exec workspace bash** -> entramos al contenedor workspace
 - Ejecutar **./composer.phar install** -> instalacion de dependencias
 - exit 
 
Dririgirse a http://localhost/

 - Ejecutar **docker-compose down** -> esto finaliza la ejecucion de los contenedores y liberación de puertos

