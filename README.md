#R-KISS
##Rustic Knowledge IP System Service

Sistema para conocer las IPs de nuestros equipos con un sencillo
y rústico sistema. En el que instalando un pequeña aplicación PHP en un
servidor, y usando un script en las máquinas que queramos (de momento
sólo para Linux) nos irá actualizando la IP pública en el servidor.


Desarrollado por MdeMoUcH (mdemouch@gmail.com)



###Instalación de R-KISS

Para instalar r-kiss necesitaremos tener instalado un servidor LAMP.

Una vez con los archivos descargados, deberemos copiar el contenido
de la carpeta trunk a la carpeta donde vaya alojarse r-kiss.

También hay que ejecutar el script de base de datos(r-kiss.sql).

Para finalizar habrá que modificar el archivo de configuración
(lib/config.php) con los parámetros adecuados en cada caso (el acceso a 
la base de datos y el usuario y contraseña que queramos usar).



###CHANGELOG - Cambios en versiones


####v0.8 - 2015-03-08

-Cambiada la información y añadida página sobre los modos.

-Input para personalizar el modo en el script.

-Añadidas comillas en el script para que funcione bien y un poco de privacidad en la contraseña.

-Pequeños cambios en estilos y favicon añadido.

-Solucionados algunos fallos y añadido algún comentario.


####v0.7.1 - 2015-03-01

-Cambiados los iconos glyphicon de las acciones por unos png libres,
para reducir el tamaño de la aplicación a la mitad.


####v0.7 - 2015-03-01

-Ahora se guarda información del host y se muestra en las acciones.

-Pequeños cambios en el interfaz.


####v0.6 - 2015-02-28

-Formulario para añadir host desde el interfaz web.

-Input para personalizar el script dinámicamente.


####v0.5 - 2015-02-28

-Opción de borrar registros y hosts, funcionando.

-Acciones para los hosts arregladas y pequeños cambios en general.


####v0.4 - 2015-02-21

-Añadida seguridad por sesión, acceso con los datos del config.

-Añadidos iconos glyphicon para las acciones y cambios en estilos.


####v0.3.1 - 2015-02-07

-Comentarios añadidos.

-Se controlan IPs locales y se muestra un alert en vez de lo de elhacker.net.


####v0.3 - 2015-02-07

-Reorganización de archivos.

-Enlaces a elhacker.net para sacar la geolocalización.

-Añadidos estilos sencillos con Bootstrap.

-Añadida página de información básica.


####v0.2.1 - 2015-02-07

-Pequeños cambios y solución de algún error.



####v0.2 - 2015-02-06

-Mejora de la clase bbdd.

-Añadida seguridad en la inserción de querys (clase bbdd).

-Sistema de plantillas sencillo.

-No guarda la IP si no ha cambiado en el modo default.

-Añadido modo log para guardar todas las veces la IP aunque no haya cambiado.

-Ahora se muestra registro por separado de los hosts.


####v0.1 - 2015-02-02 
Versión Inicial (El día de la marmota)

-Sistema básico con una mímima seguridad.

-Objetos sencillos: config y bbdd.

-Interfaz web muy cutre en html plano.

-Funciona.







[MdeMoUcH](http://www.twitter.com/mdemouch) | [La Gran M](http://www.lagranm.com) | [Ubuntu Fácil](http://www.ubuntufacil.com)

