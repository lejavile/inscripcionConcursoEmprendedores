<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


### especificaciones del servidor

- Servidor linux (ubuntu 20.04 minimo o debian 9 minimo)
  
## instalar apache2

**apt-get install apache2**

## instalar php7.4

**apt-get install php7.4 libapache2-mod-php7.4**

## instalar las siguientes librerias para php7.4

**apt-get install php7.4-mysql php7.4-curl php7.4-gd php-pear php7.4-imagick php7.4-imap mcrypt php7.4-memcache php7.4-pspell php7.4-recode php7.4-sqlite php7.4-tidy php7.4-xmlrpc php7.4-xsl php7.4-json php7.4-mbstring php7.4-zip php7.4-pdo-pgsql php7.4-pdo php7.4-pgsql php7.4-ps**

## reiniciar Apache

**service apache2 restart**
- o bien /etc/init.d/apache2 restart


## instalar curl

**sudo apt-get install curl**

## instalar composer de forma global

**sin ser root**
- curl -sS https://getcomposer.org/installer | php
- sudo mv ~/composer.phar /usr/local/bin/composer
- composer
  **referencia: (https://styde.net/instalacion-de-composer-y-laravel-en-ubuntu-14-lts-paso-a-paso/)**
  

## instalar git

**apt-get install git**


## instalar postgres
- apt-get install postgresql-12
- apt-get install postgresql-client-12
- apt-get install postgresql-contrib-12
- apt-get install libpq-dev
- apt-get install postgresql-server-dev-12

## Montar proyecto laravel en servidor linux

- el proyecto en este caso esta alojado en manejador de versiones github

- el servidor en este caso tiene instalado php7.4, apache2,postgres,git, composer etc

- es necesario dar todos los permiso a toda la carpeta /var
**chmod -R 777 /var**

- nos vamos al directorio /var/www/html para clonar nuetro proyecto
**git clone url_del_repositorio**
ejemplo: git clone git@github.com:lejavile/inscripcionConcursoEmprendedores.git

-Realizar composer install
**composer install --ignore-platform-reqs**

- entramos al directorio del proyecto y le damos permiso a las carpetas storage y bootstrap
  
chmod -R 777 public/img/
chmod -R 777 storage
chmod -R 777 bootstrap

-dentro del mismo directorio abimos el archivo de configuracion ocultio .env para colocar los datos de conexion a la BD

APP_URL=http:10.1.45.189 //aqui va ala ip del servidor del aplicativo

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1 // aquí va la ip del servidor de BD
DB_PORT=5432 //aqui va el puerto de la BD
DB_DATABASE=emprenderjuntos //Nonbre de BD
DB_USERNAME=postgres //Usuario del servidor de BD
DB_PASSWORD=123456 //clave usuario BD


- Ahora nos dirigimos al apache para crear un vihost o hots virtual como usuario root
cd /etc/apache2/site-available
- aquí se encuentra por defecto el archovo 000-default.conf del cual haremos una copia
cp 000-default.conf nombre_host_virtual.conf
ejemplo: cp 000-default.conf prueba_formulario.conf
entramos al archivo con nano
nano prueba_formulario.conf

- nos mostrara el siguiente contenido
      <VirtualHost *:80>
        //aqui cambiamos el asterisco (*) por la ip del servidor del aplicativo que en este ejemplo seria  10.1.45.189 quedaria de la siguiente forma 
        <VirtualHost 10.1.45.189:80>
        # The ServerName directive sets the request scheme, hostname and port that
        # the server uses to identify itself. This is used when creating
        # redirection URLs. In the context of virtual hosts, the ServerName
        # specifies what hostname must appear in the request's Host: header to
        # match this virtual host. For the default virtual host (this file) this
        # value is not decisive as it is used as a last resort host regardless.
        # However, you must set it for any further virtual host explicitly.
        #ServerName www.example.com

        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/html  // aquí completamos la ruta hacia donde apuntara el aplicativo por defecto que es a la carpeta public del proyecto laravel para nuestro caso seri de la siguente forma: /var/www/html/inscripcionConcursoEmprendedores/public

        # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
        # error, crit, alert, emerg.
        # It is also possible to configure the loglevel for particular
        # modules, e.g.
        #LogLevel info ssl:warn

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        # For most configuration files from conf-available/, which are
        # enabled or disabled at a global level, it is possible to
        # include a line for only one particular virtual host. For example the
        # following line enables the CGI configuration for this host only
        # after it has been globally disabled with "a2disconf".
        #Include conf-available/serve-cgi-bin.conf
      </VirtualHost>

      # vim: syntax=apache ts=4 sw=4 sts=4 sr noet



- luego guardar el archivo con ctrl o enter y luego ctrl x

- Ahora se debe activar el modrewrite del apache2

a2enmod rewrite &&  service apache2 restart

- en caso de ser ubuntu seria

sudo a2enmod rewrite && sudo service apache2 restart

- a nos dirigimos al directorio de apache2 para teminar de configurar el modrewrite
esto es en /etc/apache2

cd /etc/apache2

- aquí editamos el archivo  apache2.conf
nano apache2.conf

- buscar <Directory /var/www/>y cambiar AllowOverride None a AllowOverride All, deberia aparecer 3 veces

- luego guardar el archivo con ctrl o enter y luego ctrl x

y reiniciar Apache
service apache2 restart
o bien /etc/init.d/apache2 restart



- en el navegador coloque la ip del servidor de aplicativo y el mismo deberia levantar en este caso
http:// 10.1.45.189

- Conectra servidor de BD postgres de forma remota para que el server tenga acceso a la BD de emprende juntos

## ejecutar migrate Una vez Establecida la conexion con la BD esto creara la nueva tabla para la inscripcion (inscripcion_concurso)

**php artisan migrate**
