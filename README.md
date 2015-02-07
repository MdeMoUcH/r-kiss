#R-KISS
##Rustic Knowledge IP System Service

Sistema para conocer las IPs de nuestros propios equipos con un sencillo
y rústico sistema. En el que instalando un pequeña aplicación PHP en un
servidor, y usando un script en las máquinas que queramos (de momento
sólo para Linux) nos irá actualizando la IP pública en un servidor.


Desarrollado por MdeMoUcH (mdemouch@gmail.com),
a base de PHP, MySQL y un poquito de Shell Script...





###ToDo - Lista de tareas pendientes

-Urls amigables.

-Meter seguridad (usuario//contraseña en sesion).

-Mostrar el script con host personalizado dinámicamente.

-Opción de borrar hosts.

-Opción de lanzar registro de hosts desde la web.


-Sistema de usuarios? CFW?





###CHANGELOG - Cambios en versiones


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

