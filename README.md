
# El proyecto se puede ejecutar de dos maneras:

1. Laravel Sail
2. Servidor Local 

# 1. Con Laravel Sail 
1. Clonar el repositorio https://github.com/itorresgalaz/BTC_test.git
2. Configurar las variables de entorno .env :
Esta variable es opcional, puesto que yo tenia ocupado el puerto 80, 
use otro.

APP_POST = 8080
# Variables de la base de datos creada por sail
DB_CONNECTION=pgsql

DB_HOST=pgsql

DB_PORT=5432

DB_DATABASE=btc

DB_USERNAME=sail

DB_PASSWORD=password

3. Ejecutar comando: composer install
4. Levantar stack de docker con ./vendor/bin/sail up
5. Ejecutar comando: ./vendor/bin/sail artisan key:generate
6. Ejecutar comando: ./vendor/bin/sail npm install && ./vendor/bin/sail npm run build
7. Ejecutar comando: ./vendor/bin/sail artisan migrate
8. Ingresar desde el navegador localhost:Puerto


# 2. Servidor Local  

1. Tener instalado php >=8. 
2. Tener instalado nodejs (En mi caso use la version LTS) y npm (Ultima).
3. Tener instalado Composer.
4. Clonar el repositorio https://github.com/itorresgalaz/BTC_test.git
5. Configurar el archivo .env para conectarnos a la base de datos (Variables por default al        desarrollar con Laravel Sail).
6. Ejecutar comando     :   composer install 
7. Ejecutar comando     :   npm install && npm run build
8. Ejecutar comando     :   php artisan key:generate
8. Ejecutando comando   :   php artisan migrate
9. Ejecutar comando     :   php artisan serve     Para levantar el servidor local 
10. Ingresar al navegador con la direccion que entrega el comando anterior.

# Requerimientos

Segun los requerimientos se crearon dos vistas con blade, una para el Home donde se puede 
ver el valor del Bitcoin en USD, y una vista para ver el historial del comportamiento de este.

# Desarrollado con:
1. Laravel 9
2. Javascript
3. Axios
4. Bootstrap
5. Docker
6. Uso de API de COINBASE https://api.coinbase.com/v2/exchange-rates
